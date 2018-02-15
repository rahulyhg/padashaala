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
});

Auth::routes();
Route::get('user/add','UserController@create')->name('user.index');
Route::post('user/store','UserController@store')->name('user.store');
Route::get( 'user/delete/{id}', 'UserController@delete' )->name( 'user.delete' );
Route::get( 'user/edit/{id}', 'UserController@edit' )->name( 'user.edit' );
Route::post('user/update', 'UserController@update')->name('user.update');
Route::get('user','UserController@index')->name('user.index');
Route::get('user/json', 'UserController@getUserJson')->name('users.json');


// Route For Vendor
Route::group( [
   'prefix'     => 'vendors',
   'as'         => 'vendors.',
   'namespace'  => 'Vendor',
   // 'middleware' => 'role:admin|manager|shop-manager'
   ], 
	function () {

	// configuration
	Route::get('/configuration','VendorController@getConfiguration')->name('config');
	// order
	Route::get('/order/create','VendorController@getOrderCreate')->name('order.create');
	Route::get('/order','VendorController@getOrder')->name('order');
	// product
	Route::get('/product/create','VendorController@getProductCreate')->name('product.create');
	Route::get('/product','VendorController@getProduct')->name('product');
	// dashboard_home
	Route::get('/','VendorController@getDashboard')->name('dashboard');

});

//Product
Route::get('/products', 'Backend\ProductController@index')->name('products.index');
Route::post('/products/store', 'Backend\ProductController@store')->name('products.store');
Route::get('/products/delete/{id}', 'Backend\ProductController@delete')->name('products.delete');
Route::get('/products/edit/{id}', 'Backend\ProductController@edit')->name('products.edit');
Route::get('/products/json', 'Backend\ProductController@getProductsJson')->name('products.json');

Route::get('/products2/json', 'Backend\ProductController@getProductsJson2')->name('products2.json');
Route::put('/products/update', 'Backend\ProductController@update')->name('products.update');
Route::get('/products/table', 'Backend\ProductController@table')->name('products.table');

