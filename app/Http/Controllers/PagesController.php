<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PageRepository;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }
    // public function __basic($slug)
    // {
    //  $pages = $this->repository->forslug($slug);
    //  abort_unless($pages, 404, 'pages');;
    // }
    public function index($slug)
    {
        $pages = $this->repository->forslug($slug);
    abort_unless($pages, 404, 'pages');

        return view('en.pages.index', compact('pages'));
    }

    public function about($slug)
    {
    $pages = $this->repository->forslug($slug);
    abort_unless($pages, 404, 'pages');
       
        return view('en.pages.about', compact('pages'));
    }

    public function blogHome($slug)
    {
        $pages = $this->repository->forslug($slug);
    abort_unless($pages, 404, 'pages');

        return view('en.pages.blog-home', compact('pages'));
    }

    public function blogPost($slug)
    {   
        $pages = $this->repository->forslug($slug);
        abort_unless($pages, 404, 'pages');

        return view('en.pages.blog-post', compact('pages'));
    }

    public function contact($slug)
    {
        $pages = $this->repository->forslug($slug);
        abort_unless($pages, 404, 'pages');

        return view('en.pages.contact', compact('pages'));
    }

    public function faq($slug)
    {
        $pages = $this->repository->forslug($slug);
        abort_unless($pages, 404, 'pages');

        return view('en.pages.faq', compact('pages'));
    }

    public function portfolioItem($slug)
    {
        $pages = $this->repository->forslug($slug);
        abort_unless($pages, 404, 'pages');

        return view('en.pages.portfolio-item', compact('pages'));
    }

    public function portfolioOverview($slug)
    {
        $pages = $this->repository->forslug($slug);
        abort_unless($pages, 404, 'pages');

        return view('en.pages.portfolio-overview', compact('pages'));
    }

    public function pricing($slug)
    {
        $pages = $this->repository->forslug($slug);
        abort_unless($pages, 404, 'pages');

        return view('en.pages.pricing', compact('pages'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
