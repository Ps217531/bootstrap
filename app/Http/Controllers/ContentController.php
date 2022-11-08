<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\IndexRepository;

class ContentController extends Controller
{
    public function __construct(IndexRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($slug)
    {
        $content = $this->repository->forslug($slug);
        abort_unless($content, 404, 'content');

        return view('content.index', compact('content'));
    }
}
