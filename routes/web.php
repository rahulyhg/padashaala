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

Route::get( '/brands/delete/{id}', 'Backend\BrandController@delete' )->name( 'brands.delete' );
Route::get( '/brands/edit/{id}', 'Backend\BrandController@editBrand' )->name( 'brands.edit' );
Route::resource('/brand', 'Backend\BrandController');
Route::post('/brand/update', 'Backend\BrandController@updateBrand')->name('brands.update');
Route::get( '/brandjson', 'Backend\BrandController@getBrandsJson' )->name( 'brands.json' );

