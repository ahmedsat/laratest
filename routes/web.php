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
/*
| 
| Route::get('/', function () {
|     return view('welcome');
| });
| 
*/
/* test routes */
Route::get('/hello', 'Hello@index');
Route::get('/hello/{name}', 'Hello@show');
Route::get('blade', function () {
	$foods = array('Barbecue','Couscous','Fish');
	return view('page',array('name' => 'حسوب', 'day' => 'Friday', 'foods' => $foods));
});
route::get('layout', function (){
	return view('layouts.layout',array('page' => 'home'));
});
Route::get('/read', function() {
  $category = new App\Category();

  $data = $category->all(array('id','name'));

  foreach ($data as $list) {
   echo $list->name . ' ' . $list->id . '</br>';
  }
});



/* pesticides_lib routes */
Route::get('/pesticides_lib', 'pesticides_lib@index');


/* zerotype routes */
route::get('/zerotype','zerotype@index');
route::get('/zerotype/features','zerotype@features');
route::get('/zerotype/news','zerotype@news');
route::get('/zerotype/about','zerotype@about');
route::get('/zerotype/contact','zerotype@contact');


/* larashop routes */
Route::get('/','Front@index');
Route::get('/products','Front@products');
Route::get('/products/details/{id}','Front@product_details');
Route::get('/products/categories/{name}','Front@product_categories');
Route::get('/products/brands/{name}/{category?}','Front@product_brands');
Route::get('/blog','Front@blog');
Route::get('/blog/post/{id}','Front@blog_post');
Route::get('/contact-us','Front@contact_us');
Route::get('/login','Front@login');
Route::get('/logout','Front@logout');
Route::get('/cart','Front@cart');
Route::get('/checkout','Front@checkout');
Route::get('/search/{query}','Front@search');