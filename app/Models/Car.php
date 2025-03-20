<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at',
    ];

    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }

    public function maker()
    {
        return $this->belongsTo(Maker::class);
    }

    public function model()
    {
        return $this->belongsTo(\App\Models\Model::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function features()
    {
        return $this->hasOne(CarFeatures::class, 'car_id');
    }

    public function primaryImage()
    {
        return $this->hasOne(CarImages::class)
            ->oldestOfMany('position');

    }

    public function images()
    {
        return $this->hasMany(CarImages::class);

    }



    public function favouredUsers()
    {
        return $this->belongsToMany(User::class, 'favourite_cars');
    }

    public function getCreateDate()
    {
        return (new Carbon($this->created_at))->format('Y-m-d');
    }

}
