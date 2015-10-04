<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::model('modulos', 'App\Module');
Route::model('paginas', 'App\Page');
Route::model('fotos_posibles', 'App\PossiblePhoto');
Route::model('imagenes', 'App\Image');

Route::get('home', 'HomeController@index');

Route::resource('proyectos', 'ProjectsController');
Route::resource('modulos', 'ModulesController');
Route::resource('paginas', 'PagesController');
Route::resource('imagenes', 'ImagesController');
Route::resource('fotos_posibles', 'PossiblePhotosController');

Route::get('modulos/[module]', 'ModulesController@show');
Route::get('modulos/proyectos/{projects}', 'ModulesController@projects');

Route::get('paginas/[page]', 'PagesController@show');
Route::get('paginas/modulos/{modules}', 'PagesController@modules');

Route::get('fotos_posibles/[possible_photos]', 'PossiblePhotosController@show');
Route::get('fotos_posibles/imagenes/{images}', 'PossiblePhotosController@images');

Route::get('imagenes/[image]', 'ImagesController@show');
Route::get('imagenes/paginas/{pages}', 'ImagesController@pages');


