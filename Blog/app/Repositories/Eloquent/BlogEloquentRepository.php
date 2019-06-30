<?php


namespace App\Repositories\Eloquent;


use App\Blog;
use App\Repositories\Contracts\BlogRepositoryInterface;

class BlogEloquentRepository extends EloquentRepository implements BlogRepositoryInterface
{

    public function getModel()
    {
        return Blog::class;
    }
}
