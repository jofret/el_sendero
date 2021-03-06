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


Auth::routes();

//*******Web

//Route::resource('encuesta',						'EncuestaController');

/*formulario de encuesta*/
Route::get('encuesta', 'EncuestaController@store')->name('store.encuesta');




/*formulario Clientes Satisfechos*/
Route::get('post', 'Web\PageController@index');

Route::post('post', 'Web\PageController@CreateCustomerMesagge')->name('create.message');


//todos los posts
Route::get('publicaciones',		        'Web\PageController@posts')->name('posts');

//para categorias
Route::get('publicaciones/{slug}',		        'Web\PageController@category')->name('category');

//para tags - Posts
Route::get('revista-web/{slug}', 			'Web\PageController@tag')->name('tag');

//para post
Route::get('publicacion/{slug}', 			'Web\PageController@post')->name('post');

//para images
Route::get('galeria-de-imagenes', 			'Web\PageController@galery')->name('galery');

//para tags - Images
Route::get('imagenes-por-etiquetas/{slug}', 			'Web\PageController@tagImage')->name('tagImage');


//trailers-edición impresa
Route::get('ediciones-impresas',		        'Web\PageController@trailers')->name('trailers');

//para trailer
Route::get('edicion-impresa/{slug}', 			'Web\PageController@trailer')->name('trailer');

//para trailer-categorias
Route::get('ediciones-impresas/{slug}',		        'Web\PageController@trailercategory')->name('trailercategory');

//para videos
Route::get('videos', 			'Web\PageController@videos')->name('videos');

//contact_information
Route::get('contactanos', 			'Web\PageController@contact')->name('contact');



//*******Administración
Route::get('admin', 'Web\PageController@admin')->name('admin');

Route::resource('tags',							'Admin\TagController');
Route::resource('precategories',				'Admin\PrecategoryController');
Route::resource('categories',					'Admin\CategoryController');
Route::resource('posts',						'Admin\PostController');
Route::resource('trailers',						'Admin\TrailerController');
Route::resource('trailer_categories',			'Admin\TrailerCategoryController');

Route::resource('comments',						'Admin\ComentarioController');

//Route::resource('electrics',					'Admin\EletricoController');

Route::resource('images',						'Admin\ImageController');

Route::resource('videos',						'Admin\VideoController');



