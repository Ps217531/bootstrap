<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BootstrapsController;
use App\Http\Controllers\ContentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

    Route::get('bootstraps/{slug}', [bootstrapsController::class, 'index']);



    Route::get('indexs/{slug}', [ContentController::class, 'index']);

    Route::get('abouts/{slug}', [ContentController::class, 'about']);

    Route::get('contacts/{slug}', [ContentController::class, 'contact']);



// Route::resource('bootstraps/{slug}', bootstrapsController::class)->names([
   
//     'about' => 'bootstraps.about',
//     'blogHome' => 'bootstraps.blogHome',
//     'blogPost' => 'bootstraps.blogPost',
//     'contact' => 'bootstraps.contact',
//     'faq' => 'bootstraps.faq',
//     'portfolioItem' => 'bootstraps.portfolioItem',
//     'portfolioOverview' => 'bootstraps.portfolioOverview',
//     'pricing' => 'bootstraps.pricing',
//     'index' => 'bootstraps.index',
// ]);



    // Route::get('/{slug}', [PagesController::class, 'index'])->name('pages.index');
    // Route::get('/{slug}', [PagesController::class, 'about'])->name('pages.about');
    // Route::get('/{slug}', [PagesController::class, 'blogHome'])->name('pages.blog-home');
    // Route::get('/{slug}', [PagesController::class, 'blogPost'])->name('pages.blog-post');
    // Route::get('/{slug}', [PagesController::class, 'contact'])->name('pages.contact');
   







// Route::group(['prefix' => 'bootstraps/{slug}'], function () {

//     Route::get('/index', [BootstrapsController::class, 'index'])->name('bootstraps.index');

//     Route::get('/about', [BootstrapsController::class, 'about'])->name('bootstraps.about');

//     Route::get('/contact', [BootstrapsController::class, 'contact'])->name('bootstraps.contact');

//     Route::get('/pricing', [BootstrapsController::class, 'pricing'])->name('bootstraps.pricing');

//     Route::get('/faq', [BootstrapsController::class, 'faq'])->name('bootstraps.faq');

//     Route::get('/blog-home', [BootstrapsController::class, 'blogHome'])->name('bootstraps.blog-home');

//     Route::get('/blog-post', [BootstrapsController::class, 'blogPost'])->name('bootstraps.blog-post');

//     Route::get('/portfolio-item', [BootstrapsController::class, 'portfolioItem'])->name('bootstraps.portfolio-item');

//     Route::get('/portfolio-overview', [BootstrapsController::class, 'portfolioOverview'])->name('bootstraps.portfolio-overview');

        // Route::resource('', BootstrapsController::class)->names([
        //         'index' => 'pages.index',
        //         'about' => 'pages.about',
        //         'blogHome' => 'pages.blogHome',
        //         'blogPost' => 'pages.blogPost',
        //         'contact' => 'pages.contact',
        //         'faq' => 'pages.faq',
        //         'portfolioItem' => 'pages.portfolioItem',
        //         'portfolioOverview' => 'pages.portfolioOverview',
        //         'pricing' => 'pages.pricing'
        //     ]);

// });




// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'index'])->name('bootstraps.index');
// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'about'])->name('bootstraps.about');
// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'blogHome'])->name('bootstraps.blog-home');
// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'blogPost'])->name('bootstraps.blog-post');
// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'contact'])->name('bootstraps.contact');
// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'faq'])->name('bootstraps.faq');
// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'portfolioItem'])->name('bootstraps.portfolio-item');
// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'portfolioOverview'])->name('bootstraps.portfolio-overview');
// Route::get('bootstraps/{slug}', [BootstrapsController::class, 'pricing'])->name('bootstraps.pricing');
