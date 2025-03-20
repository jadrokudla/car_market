<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CarFeatures;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarImages;
use App\Models\CarType;
use App\Models\User;
use App\Models\Maker;
use App\Models\State;
use App\Models\Model;



class HomeController extends Controller
{

    public function index()
    {






        // $car = Car::create($carData);

        // $car2 = new Car();
        // $car2->fill($carData);
        // $car2->save();




        // dump($cars);

        // $car = Car::first();  // where=> 3 parametre = stplec, operator, hodnota  alebo 2 parametre = stlpec, hodnota



        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 52,
        //     'year' => 1991,
        //     'price' => 10000,
        //     'vin' => 4449,
        //     'mileage' => 100000,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => 'address',
        //     'phone' => '123456789',
        //     'description' => 'description',
        //     'published_at' => now(),
        // ];

        // $car = new Car($carData);
        // $car->save();





        // dump($car);

        // Car::where('updated_at', null)
        //     ->where('vin', 4449)
        //     ->update(['updated_at' => now()]);


        // Car::where('description', null)
        //     ->where('maker_id', 2)
        //     ->delete();
        // toArray() - prevedie na pole!!!!!!!!

        // Car::truncate(); //DELETED ALL FROM CAR TABLE


        // $Carimages = [

        //     'image_path, 255' => 'blbost',
        //     'position' => 14,
        // ];

        // $car = new CarImages($Carimages);
        // $car->save();
        // $car->save();
        // dump($car->primaryImage->toArray());
        // $car->features->update(['gps_navigation' => 90100]);

        // features() as method and features as property

        // $car->primaryImage->delete();

        // dump($car->features->toArray());
        // dump($car->primaryImage->toArray());

        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 52,
        //     'year' => 1991,
        //     'price' => 10000,
        //     'vin' => 4449,
        //     'mileage' => 100000,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => 'address',
        //     'phone' => '123456789',
        //     'description' => 'description',
        //     'published_at' => now(),
        // ];

        // $newCar = Car::create($carData);
        // dump($newCar->toArray());


        // $cars = Car::all();
        // dump($cars->toArray());

        // $car = Car::find(1); // MUSI BYT NAJPRV CAR FIND ABY SOM MOHOL CREATOVAT?

        // // $image = new CarImages([
        // //     'image_path, 255' => 'blbost123',
        // //     'position' => 143,
        // // ]);
        // // $car->images()->save($image);

        // $car->images()->create([
        //     'image_path, 255' => 'co si jak11 ',
        //     'position' => 238,
        // ]);

        // $car->images()->createMany([
        //     [
        //         'image_path, 255' => 'blbost123',
        //         'position' => 13,
        //     ],
        //     [
        //         'image_path, 255' => 'blbost123',
        //         'position' => 14,
        //     ],
        //     [
        //         'image_path, 255' => 'blbost123',
        //         'position' => 15,
        //     ],
        // ]);


        // $car = Car::find(3);

        // dump($car->carType);


        // $carType = CarType::where('name', 'Jeep')->first();

        // $cars = $carType->cars;

        // dump($cars->toArray());
        // dump($carType->cars->toArray());
        // $cars = Car::whereBelongsTo($carType)->get();

        // dump($cars);


        // $car = Car::find(1);
        // $carType = CarType::where('name', 'Hatchback')->first();

        // $car->car_type_id = $carType->id;
        // $car->save();

        // $car->carType()->associate($carType); //associate - priradi foreign key
        // $car->save();

        // $user = User::find(1);
        // $user->favouriteCars()->attach([1, 2]);
        // $user->favouriteCars()->sync([3]);

        // detach odstarenie pivot tabulky Many to many

        // $user->favouriteCars()->detach();

        // $maker = Maker::factory(5)->create();
        // dump($maker->toArray());



        // User::factory()
        //     ->count(6)
        //     ->sequence(fn(Sequence $sequence) => ['phone' => '6969' . $sequence->index])
        //     ->create();

        // User::factory()
        //     ->afterCreating(function (User $user) {
        //         dump($user->toArray());
        //     })
        //     ->create();


        // $maker = Maker::factory();




        // Model::factory()
        // ->count(10)
        // ->for($maker)
        // ->forMaker([
        //     'name' => 'BMW',
        // ])
        // ->for(Maker::factory()->state(['name' => 'BMW']))
        // ->create();

        // User::factory()
        //     ->has(Car::factory()->count(5), 'favouriteCars')
        //     ->create();

        // $users = User::find(1);
        // dump($users->toArray());

        // Maker::factory()
        //     ->count(1)
        //     ->hasModels(1)
        //     ->create();
        // Car::factory()
        //     ->count(5)
        //     ->create();



        // $car = Car::factory()
        //     ->count(5)
        //     ->create();
        // dump($car);

        // $car = Car::inRandomOrder()->first(); //in random order is decent for rendering random view for homepage
        // $car = Car::find(1);
        // dump($car->features->toArray());

        // $user = User::factory()
        //     ->has(Car::factory()->count(5), 'favouriteCars')
        //     ->create();
        // dump($user->toArray());

        // DB::table pouzivam ked napr. nemam model

        // $makers = DB::table('makers')->get();
        // dd($makers)

        // DB::table('cars')->orderBy('price', 'desc')->pluck('price', 'id');

        // $is = is_object($cars);
        // dump($is);

        //


        $cars = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
            ->orderBy('published_at', 'desc')
            ->limit(50)
            ->get();

        // $distinct = Car::where('published_at', '!=', null)
        //     ->count();
        // dump($distinct);








        return view('home.index', compact('cars')); //lets pass these cars to view through associative array ['cars' => $cars]


    }
}
