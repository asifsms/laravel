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
//     return view('hikester');
// });

Route::get('/', function () {
    $arr['notifications'] = Notificattion::all();
    return view('hikester')->with($arr);
});
// Route::view('/', 'welcome');

// Route::view('/home', 'hikester')->middleware('auth');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'User\IndexController')->only(['index', 'show']);


// Route::resource('/home', 'User\IndexController')->only(['index', 'show']);
// Auth::routes();
// Route::get('/admin', 'HomeController@admin')->name('admin');
// Route::get('/test', 'TestController@index')->name('test');
// // Route::get('/user_login', 'HomeController@login')->name('user_login'); 
// Route::get('/admin/profile', 'ProfileController@edit')->name('profile');
// Route::resource('/admin/notification', 'Admin\NotificationController');


// Route::get('/admin', 'TestController@admin')->name('admin');
// Route::resource('/blog-register', 'Blog\RegisterController');
// Route::get('custom-register','TestController@showRegisterForm');
// Route::post('custom-register','TestController@register');

// Route::resource('blog-login', 'Blog\LoginController');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/blogger', 'Auth\LoginController@showBloggerLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/blogger','Auth\RegisterController@showBloggerRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/blogger', 'Auth\LoginController@bloggerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/blogger', 'Auth\RegisterController@createBlogger');

Route::resource('/home', 'User\IndexController')->only(['index', 'show']);
Route::get('/admin', 'HomeController@admin')->name('admin');
// Route::view('/admin', 'dashboard');
Route::get('/admin/profile', 'ProfileController@edit')->name('profile');
Route::resource('/admin/notification', 'Admin\NotificationController');
Route::view('/blogger', 'blogger');







