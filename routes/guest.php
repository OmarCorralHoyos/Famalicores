<?php

use Illuminate\Support\Facades\Route;

Route::get('register', [
    'as'   => 'register',
    'uses' => 'RegisterController@signUp'
]);
Route::post('signup', [
    'uses' => 'RegisterController@register'
]);