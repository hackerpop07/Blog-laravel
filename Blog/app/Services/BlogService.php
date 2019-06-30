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

    public function getTask($id)
    {
        $task = $this->blogRepository->getById($id);
        return $task;
    }

    public function delete($obj)
    {
        $this->blogRepository->delete($obj);
    }

    public function create($request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->name = $request->name;
        $blog->contents = $request->contents;
        $blog->image = $request->image;
        $this->blogRepository->create($blog);
    }
}
