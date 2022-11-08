<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\IndexRepository;
use App\Repositories\AboutRepository;
use App\Repositories\ContactRepository;
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




    public function about($slug, AboutRepository $repository)
    {
        $content = $repository->forslug($slug);
        abort_unless($content, 404, 'content');

        return view('content.about', compact('content'));
    }

    public function contact($slug, ContactRepository $repository)
    {
        $content = $repository->forslug($slug);
        abort_unless($content, 404, 'content');

        return view('content.contact', compact('content'));
    }
   
}
