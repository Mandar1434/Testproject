<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Car::class)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
    }
}