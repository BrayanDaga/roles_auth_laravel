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

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth'])->group(function(){
    //Roles
    Route::post('roles/store','RoleController@store')->name('roles.store')
    ->middleware('permission::roles.create');

    Route::get('roles','RoleController@index')->name('roles.index')
    ->middleware('permission::roles.index');

    Route::post('roles/create','RoleController@create')->name('roles.create')
    ->middleware('permission::roles.create');

    Route::put('roles/{role}','RoleController@update')->name('roles.uptade')
    ->middleware('permission::roles.edit');

    Route::get('roles/{role}','RoleController@show')->name('roles.show')
    ->middleware('permission::roles.show');

    Route::delete('roles/store','RoleController@destroy')->name('roles.destroy')
    ->middleware('permission::roles.create');

    Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
    ->middleware('permission::roles.edit');

    //Product
    Route::post('products/store','ProductController@store')->name('products.store')
    ->middleware('permission::products.create');

    Route::get('products','ProductController@index')->name('products.index')
    ->middleware('permission::products.index');

    Route::post('products/create','ProductController@create')->name('products.create')
    ->middleware('permission::products.create');

    Route::put('products/{product}','ProductController@update')->name('products.uptade')
    ->middleware('permission::products.edit');

    Route::get('products/{product}','ProductController@show')->name('products.show')
    ->middleware('permission::products.show');

    Route::delete('products/store','ProductController@destroy')->name('products.destroy')
    ->middleware('permission::products.create');

    Route::get('products/{product}/edit','ProductController@edit')->name('products.edit')
    ->middleware('permission::products.edit');

      //Users
    Route::get('users','UserController@index')->name('users.index')
    ->middleware('permission::users.index');

    Route::put('users/{role}','UserController@update')->name('users.uptade')
    ->middleware('permission::users.edit');

    Route::get('users/{role}','UserController@show')->name('users.show')
    ->middleware('permission::users.show');

    Route::delete('users/store','UserController@destroy')->name('users.destroy')
    ->middleware('permission::users.create');

    Route::get('users/{role}/edit','UserController@edit')->name('users.edit')
    ->middleware('permission::users.edit');

});
