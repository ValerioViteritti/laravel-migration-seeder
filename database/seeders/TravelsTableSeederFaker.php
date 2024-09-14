<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Travel;
use Illuminate\Support\Str;
 // Il Trait creato per centralizzare lo generateSlug
use App\Traits\SlugTrait;

class TravelsTableSeederFaker extends Seeder
{
    use SlugTrait;
    public function run(Faker $faker): void
    {
        // genero 10 pacchetti di viaggio
        for ($i=0; $i < 10; $i++) { 
            $new_pack = new Travel();
            $new_pack->title = $faker->sentence(3);
            $new_pack->description = $faker->text(200);
            $new_pack->price = $faker->numberBetween(199, 10000);
            $new_pack->date = $faker->dateTimeBetween('+1 week', '+100 week');

            $new_pack->save();
        }
        
    }
}
