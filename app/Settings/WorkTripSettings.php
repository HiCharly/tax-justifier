<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class WorkTripSettings extends Settings
{
    public ?int $default_vehicle_id;
    public ?int $default_home_address_id;
    public ?int $default_work_address_id;

    public static function group(): string
    {
        return 'work_trip';
    }
}
