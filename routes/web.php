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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get( '/brands/delete/{id}', 'Backend\BrandController@delete' )->name( 'brands.delete' );
Route::get( '/brands/edit/{id}', 'Backend\BrandController@editBrand' )->name( 'brands.edit' );
Route::get('/brand', 'Backend\BrandController@index')->name('brand.index');
Route::post('/brand/store', 'Backend\BrandController@store')->name('brand.store');
Route::post('/brand/update', 'Backend\BrandController@updateBrand')->name('brands.update');
Route::get( '/brandjson', 'Backend\BrandController@getBrandsJson' )->name( 'brands.json' );
//Product
Route::get('/products', 'Backend\ProductController@index')->name('products.index');
Route::post('/products/store', 'Backend\ProductController@store')->name('products.store');
Route::get('/products/delete/{id}', 'Backend\ProductController@delete')->name('products.delete');
Route::get('/products/edit/{id}', 'Backend\ProductController@edit')->name('products.edit');
Route::get('/products/json', 'Backend\ProductController@getProductsJson')->name('products.json');
Route::post('/products/update', 'Backend\ProductController@update')->name('products.update');
Route::post('/products/updateAll', 'Backend\ProductController@updateAll')->name('products.updateAll');
Route::get('/products/table', 'Backend\ProductController@table')->name('products.table');
Route::get('/products/stock', 'Backend\ProductController@stock')->name('products.stock');

//Vendor
Route::get('/vendor/details', 'Backend\UserController@index')->name('vendors.details');
Route::get('/vendor/details/delete/{id}', 'Backend\UserController@delete')->name('vendors_details.delete');
Route::get('/vendor/details/edit/{id}', 'Backend\UserController@editVendorDetails')->name('vendors_details.edit');
Route::post('/vendor/details/update', 'Backend\UserController@updateVendorDetails')->name('vendors_details.update');
Route::get('/vendor/json', 'Backend\UserController@getVendorDetails')->name('vendors.json');
Route::post('/vendor/details/store', 'Backend\UserController@storeVendorDetails')->name('vendors_details.store');
Route::get('/vendor/details/view/{id}', 'Backend\UserController@viewVendorDetails')->name('vendors_details.view');

Route::get('/settings', 'Backend\ConfigurationController@getConfiguration')->name('settings');
Route::post('/settings', 'Backend\ConfigurationController@postConfiguration')->name('settings.update');

// Team members
Route::get('/teams', 'Backend\TeamController@index')->name('teams.index');
Route::get('/team/create', 'Backend\TeamController@create')->name('teams.create');
Route::post('/team/store', 'Backend\TeamController@store')->name('team.store');
Route::get('/team/edit/{id}', 'Backend\TeamController@edit')->name('team.edit');
Route::post('/team/update/{id}', 'Backend\TeamController@update')->name('team.update');
Route::post('/team/delete/{id}', 'Backend\TeamController@delete')->name('team.delete');
Route::get('/teams/json', 'Backend\TeamController@getTeamJson')->name('teams.json');

// Menu
Route::get('/menu', 'Backend\MenuController@index')->name('menu.index');
Route::get('/menu/view', 'Backend\MenuController@show')->name('menu.show');
Route::post( '/menu/addmenu', 'Backend\MenuController@addmenu' )->name( 'haddmenu' );

// Route::get( '/categories/json', 'CategoryController@getCategoriesJson' )->name( 'categories.json' );
Route::get( '/categories/view', 'Backend\CategoryController@show')->name('category.show');

// Testimonial
Route::get('/testimonials', 'Backend\TestimonialController@index')->name('testimonials.index');
Route::get('/testimonials/create', 'Backend\TestimonialController@create')->name('testimonials.create');
Route::post('/testimonials/store', 'Backend\TestimonialController@store')->name('testimonials.store');
Route::get('/testimonials/json', 'Backend\TestimonialController@getTestimonialsJson')->name('testimonials.json');
Route::get('/testimonials/edit/{id}', 'Backend\TestimonialController@edit')->name('testimonials.edit');
Route::post('/testimonials/update/{id}', 'Backend\TestimonialController@update')->name('testimonials.update');
Route::get('/testimonials/delete/{id}', 'Backend\TestimonialController@delete')->name('testimonials.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
