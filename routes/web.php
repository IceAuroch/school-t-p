<?php

use Illuminate\Support\Facades\Auth;

require_once __DIR__ . '/web.admin.php';
require_once __DIR__ . '/web.client.php';

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
