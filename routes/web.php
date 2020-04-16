<?php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Auth;

Route::get('/', 'MainController@index')->name('index');
Route::get('/detailproduct/{id}', 'MainController@show')->name('show');


Route::get('/shop', 'ShopController@create')->name('shops.create');
Route::post('/shop', 'ShopController@store')->name('shops.store');

//Compte Utilisateur

Route::get('/user', 'UserController@create')->name('users.create');
Route::post('/user', 'UserController@store')->name('users.store');


//Authentification
Route::group([
	'middleware' => 'App\Http\Middleware\Auth',
], function() {

	// Dashboard
	Route::get('/dashboard', 'DashboardController@index')->name('admin');
	}
);
Route::get('/dashboard/users', 'DashboardController@liste')->name('user.liste');
Route::get('/dashboard/pages/shop', 'DashboardController@shop')->name('shop.liste');

Route::get('/Auth', 'Auth\LoginController@logout')->name('logout');
Route::get('/auth', 'Auth\LoginController@index')->name('login-form');
Route::post('/', 'Auth\LoginController@login')->name('login');



/*Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');*/    
