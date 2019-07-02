<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Van Hoc";
        $category->save();
        $category = new Category();
        $category->name = "Toan";
        $category->save();
        $category = new Category();
        $category->name = "Su";
        $category->save();
    }
}
