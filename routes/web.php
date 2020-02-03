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

Route::get('/', 'frontController@index');

Route::get('admin', 'adminController@admin');


Route::get('setups', 'adminController@setups');

Route::post('addSettings','crudController@insertData');


Route::get('sendMessage','frontController@sendMessage');


Route::get('categories', 'adminController@categories');

Route::post('addCategory','crudController@insertData');

Route::get('deleteCategory/{id}','adminController@deleteCategory');

Route::get('editCategory/{id}','adminController@editCategory');

Route::post('updateCategory/{id}','crudController@updateData'); 


Route::get('new-post','adminController@newPost');

Route::post('addPost','crudController@insertData');

Route::get('all-posts','adminController@allPosts');

Route::get('editPost/{id}','adminController@editPost');

Route::post('updatePost/{id}','crudController@updateData');

Route::get('deletePost/{id}','adminController@deletePost');

//Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('backend.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['namespace' => 'Admin'], function(){

	Route::get('admin-login','Auth\LoginController@showLoginForm')->name('backend.login');

	Route::post('admin-login','Auth\LoginController@Login');

});

