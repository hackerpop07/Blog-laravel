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
        $blog = $this->blogService->getAll();
        return view('index', compact('blog'));
    }
}
