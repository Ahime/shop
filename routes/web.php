<?php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', 'MainController@index')->name('index');
Route::get('/detailproduct/{id}', 'MainController@show')->name('show');

Route::get('register', function(){
    $title = 'register';
    return view('pages.register',compact('title'));
});

Route::get('/shop', 'ShopController@create')->name('shops.create');
Route::post('/shop', 'ShopController@store')->name('shops.store');

Route::get('/user', 'UserController@create')->name('users.create');
Route::post('/user', 'UserController@store')->name('users.store');

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('admin');
Route::get('/dashboard/users', 'DashboardController@create')->name('user.create');
Route::get('/dashboard/users', 'DashboardController@liste')->name('user.liste');
//Route::get('/dashboard/users', 'DashboardController@store')->name('user.store');

//Authentification
Route::post('/', 'ConnexionController@login')->name('conn');
Route::get('/dashboard', 'ConnexionController@lagout')->name('deconn');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
