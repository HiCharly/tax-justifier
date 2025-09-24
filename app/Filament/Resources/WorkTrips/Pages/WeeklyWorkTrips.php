<?php

namespace App\Filament\Resources\WorkTrips\Pages;

use App\Filament\Resources\WorkTrips\WorkTripResource;
use App\Models\WorkTrip;
use Carbon\Carbon;
use Closure;
use DateTime;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Validation\Rules\Exists;

class WeeklyWorkTrips extends Page
{
    protected static string $resource = WorkTripResource::class;

    protected string $view = 'filament.resources.work-trips.pages.weekly-work-trips';

    use InteractsWithFormActions;
    use InteractsWithForms;

    public DateTime $week_starting;

    public bool $monday = false;

    public int $monday_vehicle_id;

    public int $monday_home_address_id;

    public int $monday_work_address_id;

    public bool $tuesday = false;

    public int $tuesday_vehicle_id;

    public int $tuesday_home_address_id;

    public int $tuesday_work_address_id;

    public bool $wednesday = false;

    public int $wednesday_vehicle_id;

    public int $wednesday_home_address_id;

    public int $wednesday_work_address_id;

    public bool $thursday = false;

    public int $thursday_vehicle_id;

    public int $thursday_home_address_id;

    public int $thursday_work_address_id;

    public bool $friday = false;

    public int $friday_vehicle_id;

    public int $friday_home_address_id;

    public int $friday_work_address_id;

    public bool $saturday = false;

    public int $saturday_vehicle_id;

    public int $saturday_home_address_id;

    public int $saturday_work_address_id;

    public bool $sunday = false;

    public int $sunday_vehicle_id;

    public int $sunday_home_address_id;

    public int $sunday_work_address_id;

    const array DAYS = [
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday',
    ];

    public function mount(): void
    {
        $this->week_starting = now()->startOfWeek();

        $settings = app(\App\Settings\WorkTripSettings::class);
        foreach (self::DAYS as $day) {
            if($settings->default_vehicle_id) {
                $this->{$day.'_vehicle_id'} = $settings->default_vehicle_id;
            }
            if($settings->default_home_address_id) {
                $this->{$day.'_home_address_id'} = $settings->default_home_address_id;
            }
            if($settings->default_work_address_id) {
                $this->{$day.'_work_address_id'} = $settings->default_work_address_id;
            }
        }
    }

    protected function getFormSchema(): array
    {
        $schema = [];
        $user = auth()->user();

        $availableVehicles = $user->vehicles->pluck('name', 'id');
        $availableAddresses = $user->addresses->pluck('name', 'id');

        $schema[] = DatePicker::make('week_starting')
            ->label(ucfirst(__('app.day.first_day_of_week')))
            ->defaultFocusedDate(now()->startOfWeek())
            ->native(false)
            ->rules([
                fn (): Closure => function (string $attribute, Carbon $value, Closure $fail) {
                    if (! $value->isMonday()) {
                        $fail(__('app.day.must_be_monday', ['attribute' => __('app.day.first_day_of_week')]));
                    }
                },
            ])
            ->required();

        foreach (self::DAYS as $day) {
            $i18nDay = __('app.day.'.$day);

            $schema[] = Toggle::make($day)
                ->label($i18nDay)
                ->live();

            $schema[] = Grid::make(3)->schema([
                Select::make($day.'_vehicle_id')
                    ->options($availableVehicles)
                    ->label(ucfirst(trans_choice('app.vehicle.vehicle', 1)))
                    ->hidden(fn (Get $get): bool => ! $get($day))
                    ->required()
                    ->rules([
                        new Exists('vehicles', 'id', fn ($query) => $query->where('user_id', $user->id)),
                    ]),

                Select::make($day.'_home_address_id')
                    ->options($availableAddresses)
                    ->label(ucfirst(__('app.work_trip.home_address')))
                    ->hidden(fn (Get $get): bool => ! $get($day))
                    ->required()
                    ->rules([
                        new Exists('addresses', 'id', fn ($query) => $query->where('user_id', $user->id)),
                    ]),

                Select::make($day.'_work_address_id')
                    ->options($availableAddresses)
                    ->label(ucfirst(__('app.work_trip.work_address')))
                    ->hidden(fn (Get $get): bool => ! $get($day))
                    ->required()
                    ->rules([
                        new Exists('addresses', 'id', fn ($query) => $query->where('user_id', $user->id)),
                    ]),
            ]);
        }

        return $schema;
    }

    public function save(): void
    {
        $this->validate();
        $this->authorize('create', WorkTrip::class);
        $user = auth()->user();

        foreach (self::DAYS as $day) {
            $date = (clone $this->week_starting)->modify(ucfirst($day));

            if ($this->$day) {
                $user->workTrips()->updateOrCreate([
                    'date' => $date->format('Y-m-d'),
                ], [
                    'vehicle_id' => $this->{$day.'_vehicle_id'},
                    'home_address_id' => $this->{$day.'_home_address_id'},
                    'work_address_id' => $this->{$day.'_work_address_id'},
                ]);
            } else {
                $user->workTrips()->where('date', $date->format('Y-m-d'))->delete();
            }
        }

        Notification::make()
            ->title(__('notifications.saved_successfully'))
            ->success()
            ->send();
    }

    public function getTitle(): string|Htmlable
    {
        return __('app.work_trip.weekly_work_trips');
    }
}
