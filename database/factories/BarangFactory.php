<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Barang::class, function (Faker $faker) {
    return [
        'nama_barang' => $faker->randomElement(['Kopi', 'SSD', 'VGA']),
        'gambar' => $faker->randomElement(['kopi.jpeg', 'ssd.jpeg', 'vga.jpeg']),
        'harga' => $faker->randomElement(['3000', '4000', '5000']),
        'stok' => $faker->randomElement(['3', '4', '5', '6']),
        'keterangan' => Str::random(50)
    ];
});

