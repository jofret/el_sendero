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

//*****************Aquí Web Enlaces**********************//


Route::get('/', 'Web\PageController@inicio')->name('inicio');


Auth::routes();

//*******Web





//para categorias
Route::get('productos/{slug}',		        'Web\PageController@products')->name('products');

//para tags
Route::get('componentes/{slug}', 			'Web\PageController@tag')->name('tag');

//para post
Route::get('producto/{slug}', 			'Web\PageController@product')->name('product');




//*******Administración
Route::get('admin', 'Web\PageController@admin')->name('admin');

Route::resource('tags',				'Admin\TagController');
Route::resource('precategories',	'Admin\PrecategoryController');
Route::resource('categories',		'Admin\CategoryController');
Route::resource('posts',			'Admin\PostController');
Route::resource('electrics',		'Admin\EletricoController');



