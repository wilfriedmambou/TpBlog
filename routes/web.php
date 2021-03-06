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

Route::get('/','PostController@index')->name('home');  //la page des articles 
// page pour afficher chaque article grate a  son id 
Route::get('posts/{post}','PostController@show')->where('post','[0-9]+');
// page de modification de articles grace a leurs ids
Route::post('posts/{post}/edit','Postcontroller@edit');
Route::get('posts/create','Postcontroller@create');
// sauvegeder les donnes dans la BD
Route::post('/posts','Postcontroller@store');
Route::post('/posts/{post}/comments','CommentsController@store');


Route::get('/register','RegistrationController@create');
Route::get('/logout','RegistrationController@destroy'); 
Route::post('/register','RegistrationController@store');
Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/user/{user}/edit','UserController@edit');
Route::post('/user/{user}/edit',['as'=> 'user.edit','uses'=>'UserController@update'])->where('user','[0-9]+');;

// Route::get('/logout','SessionsController@destroy');

     
// ici je vais utiliser les ressources pour mapper mes routes en toute securite et en toute facilite 
Route::group(['namespace'=>'Admin'],function(){

    Route::resource('admin/post','PostController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','CategoryController');
    Route::resource('admin/user','UserController');
    // Route::resource('admin/user/cre','UserController');

});





