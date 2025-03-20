<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Maker;
use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\User;
use App\Models\City;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maker_id' => Maker::inRandomOrder()->first()->id ?? Maker::factory()->create()->id,
            'model_id' => function (array $attributes) {
                return Model::where('maker_id', $attributes['maker_id'])
                    ->inRandomOrder()->first()->id ?? Model::factory()->create(['maker_id' => $attributes['maker_id']])->id;
            },
            'year' => fake()->year(),
            'price' => ((int) fake()->randomFloat(2, 5, 100)) * 1000, // there is no random integer, only random float
            'vin' => strtoupper(Str::random(17)),
            'mileage' => ((int) fake()->randomFloat(2, 5, 100)) * 1000,
            'car_type_id' => CarType::inRandomOrder()->first()->id,
            'fuel_type_id' => FuelType::inRandomOrder()->first()->id ?? FuelType::factory()->create()->id,
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'city_id' => City::inRandomOrder()->first()->id ?? City::factory()->create()->id,
            'address' => fake()->address(),
            'phone' => function (array $attributes) {
                return User::find($attributes['user_id'])->phone;
            },
            'description' => fake()->text(2000),
            'published_at' => fake()->optional(0.9)->dateTimeBetween('-1 month', '+ 1 day'),
        ];
    }
}

