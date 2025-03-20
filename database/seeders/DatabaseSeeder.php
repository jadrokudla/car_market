<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\FuelType;
use App\Models\State;
use App\Models\User;
use App\Models\CarType;
use App\Models\City;
use App\Models\Model;
use App\Models\Maker;
use App\Models\CarImages;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\FuelTypeFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        CarType::factory()
            ->sequence(
                ['name' => 'Sedan'],
                ['name' => 'SUV'],
                ['name' => 'Hatchback'],
                ['name' => 'Coupe'],
                ['name' => 'Convertible'],
                ['name' => 'Wagon'],
                ['name' => 'Van'],
                ['name' => 'Truck'],
                ['name' => 'Minivan'],
                ['name' => 'Crossover'],
            )
            ->count(10)
            ->create();

        FuelType::factory()
            ->sequence(
                ['name' => 'Gas'],
                ['name' => 'Diesel'],
                ['name' => 'Electric'],
                ['name' => 'Hybrid'],
            )
            ->count(4)
            ->create();

        $states = [
            'California' => ['Los Angeles', 'San Francisco', 'San Diego'],
            'Texas' => ['Houston', 'Dallas', 'Austin'],
            'Florida' => ['Miami', 'Orlando', 'Tampa'],
            'New York' => ['New York City', 'Buffalo', 'Rochester'],
            'Illinois' => ['Chicago', 'Springfield', 'Peoria'],
            'Pennsylvania' => ['Philadelphia', 'Pittsburgh', 'Erie'],
            'Ohio' => ['Columbus', 'Cleveland', 'Cincinnati'],
            'Georgia' => ['Atlanta', 'Savannah', 'Augusta'],
            'North Carolina' => ['Charlotte', 'Raleigh', 'Greensboro'],
            'Michigan' => ['Detroit', 'Grand Rapids', 'Lansing'],
        ];

        foreach ($states as $state => $cities) {
            State::factory()
                ->state(['name' => $state])
                ->has(
                    City::factory()
                        ->count(count($cities))
                        ->sequence(...array_map(fn($city) => ['name' => $city], $cities))
                )
                ->create();
        }

        $makers = [
            'Toyota' => ['Corolla', 'Camry', 'RAV4', 'Highlander', 'Sienna'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Odyssey'],
            'Ford' => ['Fiesta', 'Focus', 'Fusion', 'Escape', 'Explorer'],
            'Chevrolet' => ['Spark', 'Cruze', 'Malibu', 'Equinox', 'Tahoe'],
            'Nissan' => ['Versa', 'Sentra', 'Altima', 'Rogue', 'Pathfinder'],
            'Hyundai' => ['Accent', 'Elantra', 'Sonata', 'Tucson', 'Santa Fe'],

        ];

        foreach ($makers as $maker => $models) {
            Maker::factory()
                ->state(['name' => $maker])
                ->has(
                    Model::factory()
                        ->count(count($models))
                        ->sequence(...array_map(fn($model) => ['name' => $model], $models))
                )
                ->create();
        }

        User::factory()
            ->count(3)
            ->create();

        User::factory()
            ->count(2)
            ->has(
                Car::factory()
                    ->count(50)
                    ->has(
                        CarImages::factory()
                            ->count(5)
                            ->sequence(fn(Sequence $sequence) => ['position' => $sequence->index % 5 + 1]),

                        'images'
                    )
                    ->hasFeatures(),
                'favouriteCars'

            )
            ->create();


    }
}
