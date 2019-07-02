<?php


namespace App\Services;


use App\Blog;
use App\Repositories\Contracts\BlogRepositoryInterface;

class BlogService implements BlogServiceInterface
{
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getAll()
    {
        $result = $this->blogRepository->getAll();
        return $result;
    }

    public function getBlog($id)
    {
        $blog = $this->blogRepository->getById($id);
        return $blog;
    }

    public function delete($id)
    {
        $blog = $this->blogRepository->getById($id);
        $this->blogRepository->delete($blog);
    }

    public function create($request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->name = $request->name;
        $blog->contents = $request->contents;
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $blog->image = $file;
        } else {
//          php artisan storage:link
            $path = $file->store('images', 'public');
            $blog->image = $path;
        }
        $this->blogRepository->create($blog);
    }

    public function update($request, $id)
    {
        $blog = $this->blogRepository->getById($id);
        $blog->name = $request->name;
        $blog->title = $request->title; // lam gi co
        $blog->contents = $request->contents;
        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $blog->image = $file;
        } else {
//          php artisan storage:link
            $path = $file->store('images', 'public');
            $blog->image = $path;
        }
        $this->blogRepository->update($blog);
    }
}
