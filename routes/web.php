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

use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('dashboard.contact.add_contact');
    //return redirect()->to('login');
});

//contact routes
Route::prefix('dashboard/contact/')->group(function () {
    Route::get('/add', 'ContactController@create')->name('contact.add');
    Route::post('/store', 'ContactController@store')->name('contact.store');
    Route::get('/show', 'ContactController@index')->name('contact.show');
    Route::get('/edit/{id}', 'ContactController@edit')->name('contact.edit');
    Route::get('/delete/{id}', 'ContactController@destroy')->name('contact.destroy');
    Route::post('/update/{id}', 'ContactController@update')->name('contact.update');
});

//category routes
Route::prefix('dashboard/category/')->group(function () {
    Route::post('/add', 'CategoryController@create')->name('category.add');
    Route::get('/show', 'CategoryController@index')->name('category.show');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::get('/delete/{id}', 'CategoryController@destroy')->name('category.destroy');
    Route::post('/update/{id}', 'CategoryController@update')->name('category.update');
});

Route::get('SetLocale/{locale}', function ($locale) {
    Session::put('locale',$locale);
    return redirect()->back();
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Profile
Route::get('/MyProfile/{password?}', 'UserController@MyProfile');

Route::post('/update_info','UserController@update_info');

Route::post('/update_password','UserController@update_password');

//User

Route::get('/AddUser', 'AdminController@AddUser');

Route::post('/AddUser','AdminController@AddUserRequest');

Route::get('/ManageUsers', 'AdminController@ManageUsers');

Route::get('/UserProfile/{action}/{user}', 'AdminController@ManageUser');

Route::post('/User/update_info/{user}','AdminController@update_info');

Route::get('/User/delete/{user}','AdminController@delete_user');

Route::get('/UserStatus/{status}/{user}','AdminController@update_status');

