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
Route::get('/login/admin', 'Auth\AdminController@showAdminLoginForm');
Route::get('/login/blogger', 'Auth\BloggerController@showBloggerLoginForm')->name('blogger.login');
// Route::get('/login', 'Auth\BloggerController@showBloggerLoginForm')->name('blogger.login');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/blogger','Auth\RegisterController@showBloggerRegisterForm')->name('blogger.register');

Route::post('/login/admin', 'Auth\AdminController@adminLogin')->name('admin.login.submit');
Route::post('/login/blogger', 'Auth\BloggerController@bloggerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/blogger', 'Auth\RegisterController@createBlogger');

Route::resource('/home', 'User\IndexController')->only(['index', 'show']);
// Route::get('/admin', 'HomeController@admin')->name('admin');
// // Route::view('/admin', 'dashboard');
Route::get('/admin/profile', 'ProfileController@edit')->name('profile');
Route::resource('/admin/notification', 'Admin\NotificationController');
Route::resource('/admin/image', 'Admin\ImageController');
Route::get('/blogger', 'BloggerController@blogger')->name('blogger');

// Route::view('/home', 'home')->middleware('auth');
// Route::view('/admin', 'admin');
Route::resource('/user-blogg', 'Blog\BloggController');
Route::get('/admin', 'AdminController@admin')->name('admin');
Route::post('/admin/logout','Auth\AdminController@logout')->name('admin.logout');
Route::post('/blogger/logout','Auth\BloggerController@bloggerLogout')->name('blogger.logout');
Route::resource('/single-blogg', 'Blog\SingleBloggController');




