<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('work_trip.default_home_address_id', null);
        $this->migrator->add('work_trip.default_work_address_id', null);
        $this->migrator->add('work_trip.default_vehicle_id', null);
    }
};
