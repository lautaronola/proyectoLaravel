<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    $path = storage_path('app/public/product');
    return [

      'name' => $faker->sentence(3),
      'description' => $faker->paragraph(4),
      'price'=> $faker->randomFloat(2, 2, 8),
      'user_id'=> rand(1,6),//FK de users
      'category_id'=> rand(1,4),//FK de category
      'featured_img'=> $faker->image($path, 200, 200, 'food', false)

    ];
});
