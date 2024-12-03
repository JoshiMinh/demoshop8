<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryProduct;

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/home', function () {
//     return view('pages.home');
// });
Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

// Route::get('/product', function () {
//     return view('pages.product');
// });

Route::get('/product','App\Http\Controllers\HomeController@product');


// Route::get('/news', function () {
//     return view('pages.news');
// });

Route::get('/news','App\Http\Controllers\HomeController@news');


// Route::get('/contact', function () {
//     return view('pages.contact');
// });

Route::get('/contact','App\Http\Controllers\HomeController@contact');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@showdashboard');
route::post('/admin_dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','AdminController@logout');

// category product
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');
Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');

Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');
// Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/detele-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);



Route::get('/add-brand-product','App\Http\Controllers\BrandProductController@add_brand_product');
Route::get('/all-brand-product','App\Http\Controllers\BrandProductController@all_brand_product');
Route::post('/save-brand-product','App\Http\Controllers\BrandProductController@save_brand_product');
Route::get('/unactive-brand-product/{brand_product_id}','App\Http\Controllers\BrandProductController@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','App\Http\Controllers\BrandProductController@active_brand_product');
Route::get('/edit-brand-product/{brand_product_id}','App\Http\Controllers\BrandProductController@edit_brand_product');
Route::post('/update-brand-product/{brand_product_id}','App\Http\Controllers\BrandProductController@update_brand_product');

Route::get('/delete-brand-product/{brand_product_id}','App\Http\Controllers\BrandProductController@delete_brand_product');
