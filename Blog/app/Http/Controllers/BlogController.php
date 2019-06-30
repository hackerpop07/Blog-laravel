<?php

namespace App\Http\Controllers;

use App\Services\BlogServiceInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogService;

    public function __construct(BlogServiceInterface $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $blogs = $this->blogService->getAll();
        return view('index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = $this->blogService->getBlog($id);
        return view('detail', compact('blog'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->blogService->create($request);
        return redirect()->route('blogs.index');
    }

    public function edit($id)
    {
        $blog = $this->blogService->getBlog($id);
        return view('edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $this->blogService->update($request, $id);
        return redirect()->route('blogs.index');
    }

    public function destroy($id)
    {
        $this->blogService->delete($id);
        return redirect()->route('blogs.index');
    }
}
