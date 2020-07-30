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


Route::get('/',	'Web\PageController@inicio')->name('inicio');

Auth::routes();

//*******Web


Route::get('publicaciones', 'Web\PageController@publicaciones')->name('publicaciones');

//para post publicaciones
Route::get('publicaciones/{slug}', 		    'Web\PageController@post')->name('post');


Route::get('problemas-con-la-sunat/{slug}',		    'Web\PageController@category')->name('category');


Route::get('problemas-con-sunat/{slug}', 			'Web\PageController@tag')->name('tag');


/////rutas para formulario
Route::get('/sendemail','SendEmailController@index');

Route::post('/sendemail/send','SendEmailController@send');



//*******Administración

Route::get('admin', 'Web\PageController@admin')->name('admin');


Route::resource('tags',			'Admin\TagController');
Route::resource('categories',	'Admin\CategoryController');
Route::resource('posts',		'Admin\PostController');
