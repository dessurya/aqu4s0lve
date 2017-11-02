<?php

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

// frontend
	// home
		Route::get('/', 'Frontend\FrontendController@home')
			->name('frontend.home');
	// home
	// about
		Route::get('/about', 'Frontend\FrontendController@about')
			->name('frontend.about');
	// about
	// contact
		Route::get('/contact', 'Frontend\FrontendController@contact')
			->name('frontend.contact');
		Route::post('/contact/store', 'Frontend\FrontendController@contactStore')
			->name('frontend.contact.store');
	// contact
	// product
		Route::get('/product', 'Frontend\FrontendController@product')
			->name('frontend.product');
		Route::get('/product/{slug}', 'Frontend\FrontendController@product')
			->name('frontend.product.select');
	// product
	// solutions
		Route::get('/solutions', 'Frontend\FrontendController@solutions')
			->name('frontend.solutions');
	// solutions
	// news
		Route::get('/news', 'Frontend\FrontendController@news')
			->name('frontend.news');
		Route::get('/news/{slug}', 'Frontend\FrontendController@newsView')
			->name('frontend.news.view');
	// news
	// careers
		Route::get('/careers', 'Frontend\FrontendController@careers')
			->name('frontend.careers');
	// careers
// frontend
