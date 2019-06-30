<?php


namespace App\Services;


interface BlogServiceInterface
{
    public function getAll();
    public function getBlog($id);
    public function delete($obj);
    public function create($request);
}
