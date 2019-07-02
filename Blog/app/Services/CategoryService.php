<?php


namespace App\Services;


use App\Blog;
use App\Category;
use App\Repositories\Eloquent\CategoryEloquentRepository;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryEloquentRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        $result = $this->categoryRepository->getAll();
        return $result;
    }

    public function getBlog($id)
    {
        $category = $this->categoryRepository->getById($id);
        return $category;
    }

    public function delete($id)
    {
        $category = $this->categoryRepository->getById($id);
        $this->categoryRepository->delete($category);
    }

    public function create($request)
    {
        $category = new Category();
        $category->name = $request->name;
        $this->categoryRepository->create($category);
    }

    public function update($request, $id)
    {
        $category = $this->categoryRepository->getById($id);
        $category->name = $request->name;
        $this->categoryRepository->update($category);
    }
}
