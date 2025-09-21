<x-filament-panels::page>
    <div class="space-y-6">
        <x-filament::section>
            <x-slot name="heading">
                {{ __('app.work_trip.weekly_work_trips') }}
            </x-slot>

            <x-slot name="description">
                {{ __('app.work_trip.weekly_work_trips_description') }}
            </x-slot>

            {{ $this->form }}

            <x-filament::button wire:click="save" class="mt-4">
                {{ __('actions.save') }}
            </x-filament::button>
        </x-filament::section>
    </div>
</x-filament-panels::page>
