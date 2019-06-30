<?php


namespace App\Repositories\Eloquent;


use App\Blog;
use App\Repositories\Contracts\BlogRepositoryInterface;
use App\Repositories\Eloquent\BlogRepositoryInterfaceace as BlogRepositoryInterfaceaceAlias;

class BlogEloquentRepository extends EloquentRepository implements BlogRepositoryInterfaceace
{

    public function getModel()
    {
        return Blog::class;
    }
}
