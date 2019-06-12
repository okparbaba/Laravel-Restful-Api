<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Reviews;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Reviews::class, function (Faker $faker) {
    return [
        'product_id'=>function(){
            return Product::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(0,5)
    ];
});
