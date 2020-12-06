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




/////rutas para formulario
Route::get('/sendemail','SendEmailController@index');

Route::post('/sendemail/send','SendEmailController@send');

/*simple Routes*/
Route::get('/alquiler-de-maquinaria', 'Web\PageController@alquileres');

Route::get('/instalaciones', 'Web\PageController@instalaciones');


Route::get('/exhibiciones', 'Web\PageController@exhibiciones');




Auth::routes();

//*******Web



/*formulario Clientes Satisfechos*/
Route::get('/Cuente-Su-Experiencia-Con Nosotros', 'Web\PageController@formularioentradas');



//para categorias
Route::get('productos/{slug}',		        'Web\PageController@products')->name('products');

//para tags
Route::get('nuestros-productos/{slug}', 			'Web\PageController@tag')->name('tag');

//para post
Route::get('producto/{slug}', 			'Web\PageController@product')->name('product');

//

//para post
Route::get('galeria-de-imagenes', 			'Web\PageController@galery')->name('galery');

//




//*******Administración
Route::get('admin', 'Web\PageController@admin')->name('admin');

Route::resource('tags',				'Admin\TagController');
Route::resource('precategories',	'Admin\PrecategoryController');
Route::resource('categories',		'Admin\CategoryController');
Route::resource('posts',			'Admin\PostController');
Route::resource('electrics',		'Admin\EletricoController');

Route::resource('images',		'Admin\ImageController');



