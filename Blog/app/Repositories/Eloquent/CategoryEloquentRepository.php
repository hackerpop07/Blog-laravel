<?php


namespace App\Repositories\Eloquent;


use App\Category;

class CategoryEloquentRepository extends EloquentRepository
{

    public function getModel()
    {
        return Category::class;
    }
}
