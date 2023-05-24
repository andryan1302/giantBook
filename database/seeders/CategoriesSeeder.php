<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $category = ['Self Development','Novel','Komik','Biografi','Naskah'];
        for($i = 0;$i< 5;$i++){
            Category::create([
                'category' => $category[$i],
            ]);
        }
    }
}
