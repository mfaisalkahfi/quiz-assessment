<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'id'             => '1',
                'name'           => 'Ilmu Pengetahuan Umum',
            ],
            [
                'id'             => '2',
                'name'           => 'Sejarah',
            ],
            [
                'id'             => '3',
                'name'           => 'Aritmatika',
            ],

        ];

        Category::insert($category);
    }
}
