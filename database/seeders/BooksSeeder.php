<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;


class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1;$i<=15;$i++){
            Book::create([
                'publisher_id' => rand(1,10),
                'title' => "Improvment of ".$faker->name,
                'author' => $faker->name,
                'year' => $faker->date($format = 'Y',$max='now'),
                'sinopsis' => $faker->sentence(10),
                'url' => '/img/cover.jpg'
            ]);
        }
    }
}
