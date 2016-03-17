<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('layouts.modal.login');
});

Route::get('register', function () {
    return view('layouts.modal.register');
});

// 
// USER ACCOUNT ROUTING
// 

// Route::get('user', 'EntriesController@index');
// Route::get('user/show/{id}', 'EntriesController@show');
// Route::get('user/create', 'EntriesController@create');
// Route::post('user', 'EntriesController@store');

Route::resource('user', 'EntriesController');

// Route::get('setting', function () {
//     return view('user.setting');
// }

// Route::get('home', function () {
//     return view('user.home');
// });

// Route::get('create', function () {
//     return view('user.create');
// });

// Route::get('show', function () {
//     return view('user.view');
// });

Route::get('edit', function () {
    return view('user.edit');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
