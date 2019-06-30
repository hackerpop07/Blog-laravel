<?php


namespace App\Services;


interface BlogServiceInterface
{
    public function getAll();
    public function getTask($id);
    public function delete($obj);
    public function create($request);
}
