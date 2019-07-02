<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Contracts\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }


    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->getModel()::paginate(3);
        return $result;
    }

    public function create($object)
    {
        return $object->save();
    }

    public function delete($blog)
    {
        $blog->delete();
    }

    public function update($object)
    {
        return $object->save();
    }

    public function getById($id)
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }
}
