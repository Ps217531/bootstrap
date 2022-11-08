<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
// Register Twill routes here eg.
// Route::module('posts');

Route::group(['prefix' => 'content'], function () {
   
    Route::module('pages');
  Route::module('indexs');
    Route::module('abouts');
    Route::module('bloghomes');
    Route::module('blogposts');
    Route::module('contacts');
    Route::module('faqs');
    Route::module('portfolioitems');
    Route::module('portfoliooverviews');
    Route::module('pricings');
  

});

  





Route::module('homes');
Route::get('home', [HomeController::class, "edit"])->name('admin.home')->defaults('id', 1); 
 Route::module('bootstraps');