<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'name' => fake()->randomElement([
                'Toyota Camry',
                'Honda Civic',
                'Ford F-150',
                'BMW X5',
                'Mercedes-Benz C-Class',
                'Audi A4',
                'Volkswagen Golf',
                'Nissan Altima',
                'Hyundai Elantra',
                'Kia Optima',
                'Mazda CX-5',
                'Subaru Outback',
                'Lexus RX',
                'Acura TLX',
                'Infiniti Q50',
                'Genesis G90',
                'Tesla Model 3',
                'Chevrolet Silverado',
                'Ram 1500',
                'GMC Sierra',
            ]),
        ];
    }
}
