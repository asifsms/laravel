<?php

use Illuminate\Support\Facades\Route;
use App\Notificattion;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $arr['notifications'] = Notificattion::all();
    return view('hikester')->with($arr);
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'User\IndexController')->only(['index', 'show']);
Route::resource('/home', 'User\IndexController')->only(['index', 'show']);
Auth::routes();
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/test', 'TestController@index')->name('test');
// Route::get('/user_login', 'HomeController@login')->name('user_login'); 
Route::get('/admin/profile', 'ProfileController@edit')->name('profile');
Route::resource('/admin/notification', 'Admin\NotificationController');
// Route::get('/admin', 'TestController@admin')->name('admin');
