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


 Route::resource('user', 'EntriesController');


// 
// USER ACCOUNT ROUTING
// 



Route::get('/oldlogin', function() {
    return view('layouts.modal.login');
});
Route::get('/oldregister', function() {
    return view('layouts.modal.register');
});


// Route::get('edit', function () {
//     return view('user.edit');
// });

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
/*
Route::group(['middleware' => ['web']], function () {
   
});
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
    Route::get('/login', 'HomeController@index');
    Route::get('/register', 'HomeController@register');

});
