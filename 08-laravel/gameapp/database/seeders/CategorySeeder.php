<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Nintendo Switch',
            'manufacturer' => 'Nintendo',
            'releasedate' => '2017-03-03',
            'description' => 'Lorem ipsum dolor sit amet'
        ]);

        $cat = new Category;
        $cat->name = 'Xbox Series X';
        $cat->manufacturer = 'Microsoft';
        $cat->releasedate = '2020-11-10';
        $cat->description = 'lorem impsun dolor sit amet';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Xbox Series S';
        $cat->manufacturer = 'Microsoft';
        $cat->releasedate = '2020-11-10';
        $cat->description = 'lorem impsun dolor sit amet';
        $cat->save();

        $cat = new Category;
        $cat->name = 'Play Station 5';
        $cat->manufacturer = 'Microsoft';
        $cat->releasedate = '2020-11-10';
        $cat->description = 'lorem impsun dolor sit amet';
        $cat->save();
    }
}
