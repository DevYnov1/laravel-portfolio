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

Route::resource('user', 'UsersController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'HomeController@index')->name('user');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
});

Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()
{
Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');
});

Route::get('/userList', 'UsersController@userList')->name('userList');

Route::get('/editProfile/{id}', 'UsersController@editProfile')->name('editProfile');

Route::get('/userSkills', 'UsersController@userSkills')->name('userSkills');

Route::patch('/user/{user_id}/skill/', 'UsersController@updateSkills')->name('updateSkills');

Route::get('/delete{id}', 'UsersController@delete_user')->name('delete');