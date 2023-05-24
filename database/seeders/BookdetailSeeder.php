<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookDetails;
class BookdetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=15;$i++){
            BookDetails::create([
                'book_id' => rand(1,15),
                'category_id' => rand(1,5),
            ]);
        }
    }
}
