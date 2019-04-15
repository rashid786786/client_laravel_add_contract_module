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
    return redirect()->to('login');
});

//contact routes
Route::prefix('dashboard')->group(function () {
    Route::get('/add', 'ContactController@index');
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

