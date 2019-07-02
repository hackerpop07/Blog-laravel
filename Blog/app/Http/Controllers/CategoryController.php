<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAll();
        return view('category.index', compact('categories'));
    }

    public function show($id)
    {
        $categories = $this->categoryService->getBlog($id);
        return view('category.detail', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $this->categoryService->create($request);
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $categories = $this->categoryService->getBlog($id);
        return view('category.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $this->categoryService->update($request, $id);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $this->categoryService->delete($id);
        return redirect()->route('categories.index');
    }
}
