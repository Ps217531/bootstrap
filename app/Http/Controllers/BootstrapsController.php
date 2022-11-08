<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootstrap;
use App\Repositories\BootstrapRepository;

class BootstrapsController extends Controller
{
    protected $bootstrapRepository;

    public function __construct(BootstrapRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($slug)
    {
    $bootstraps = $this->repository->forslug($slug);
    abort_unless($bootstraps, 404, 'bootstraps');
    
        return view('bootstraps.index', compact('bootstraps'));
        return view('bootstraps.about', compact('bootstraps'));
        return view('bootstraps.blog-home', compact('bootstraps'));
        return view('bootstraps.blog-post', compact('bootstraps'));
        return view('bootstraps.contact', compact('bootstraps'));
        return view('bootstraps.faq', compact('bootstraps'));
        return view('bootstraps.portfolio-item', compact('portfolio-item'));
        return view('bootstraps.portfolio-overview', compact('portfolio-overview'));
        return view('bootstraps.pricing', compact('pricing'));
    }

    // public function about($slug)
    // {
    // $about = $this->repository->forslug($slug);
    // abort_unless($about, 404, 'bootstraps');
       
    //     return view('bootstraps.about', compact('about'));
    // }

    // public function blogHome($slug)
    // {
    //     $bootstraps = $this->repository->forslug($slug);
    // abort_unless($bootstraps, 404, 'bootstraps');

    //     return view('bootstraps.blog-home', compact('bootstraps'));
    // }

    // public function blogPost($slug)
    // {   
    //     $bootstraps = $this->repository->forslug($slug);
    //     abort_unless($bootstraps, 404, 'bootstraps');

    //     return view('bootstraps.blog-post', compact('bootstraps'));
    // }

    // public function contact($slug)
    // {
    //     $bootstraps = $this->repository->forslug($slug);
    //     abort_unless($bootstraps, 404, 'bootstraps');

    //     return view('bootstraps.contact', compact('bootstraps'));
    // }

    // public function faq($slug)
    // {
    //     $bootstraps = $this->repository->forslug($slug);
    //     abort_unless($bootstraps, 404, 'bootstraps');

    //     return view('bootstraps.faq', compact('bootstraps'));
    // }

    // public function portfolioItem($slug)
    // {
    //     $bootstraps = $this->repository->forslug($slug);
    //     abort_unless($bootstraps, 404, 'bootstraps');

    //     return view('bootstraps.portfolio-item', compact('bootstraps'));
    // }

    // public function portfolioOverview($slug)
    // {
    //     $bootstraps = $this->repository->forslug($slug);
    //     abort_unless($bootstraps, 404, 'bootstraps');

    //     return view('bootstraps.portfolio-overview', compact('bootstraps'));
    // }

    // public function pricing($slug)
    // {
    //     $pricing = $this->repository->forslug($slug);
    //     abort_unless($pricing, 404, 'pricing');

    //     return view('bootstraps.pricing', compact('pricing'));
    // }



      public function home($slug){
        $bootstraps = $this->repository->forslug($slug);
        abort_unless($bootstraps, 404, 'bootstraps');

        return view('content.index', compact('bootstraps'));
      }  


    // public function index()
    // {
    //     $bootstraps = $this->bootstrapRepository->all();

    //     return view('admin.bootstraps.index', compact('bootstraps'));
    // }

    // public function create()
    // {
    //     return view('admin.bootstraps.create');
    // }

    // public function store(Request $request)
    // {
    //     $this->bootstrapRepository->store($request);

    //     return redirect()->route('admin.bootstraps.index');
    // }

    // public function edit($id)
    // {
    //     $bootstrap = $this->bootstrapRepository->findById($id);

    //     return view('admin.bootstraps.edit', compact('bootstrap'));
    // }

    // public function update($id, Request $request)
    // {
    //     $this->bootstrapRepository->update($id, $request);

    //     return redirect()->route('admin.bootstraps.index');
    // }

    // public function destroy($id)
    // {
    //     $this->bootstrapRepository->destroy($id);

    //     return redirect()->route('admin.bootstraps.index');
    // }
}
