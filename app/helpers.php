<?php


if (! function_exists('set_active_route')) {
	function set_active_route($route){
		return Route::is($route) ? 'active' : '';
	}
}

if (! function_exists('set_active_sidebar')) {
	function set_active_sidebar($route){
		return Route::is($route) ? 'hidden-lg' : '';
	}
}