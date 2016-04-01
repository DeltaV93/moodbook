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



 


// 
// USER ACCOUNT ROUTING
// 



Route::get('/oldlogin', function() {
    return view('layouts.modal.login');
});
Route::get('/oldregister', function() {
    return view('layouts.modal.register');
});

Route::get('home', function(){
    return view('home');
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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
	    return view('index');
	});

/* 
|
| ROUTES TO ALLOW USERS TO LOGIN IN VIA TWITTER 
|
*/     
        Route::get('/redirect', 'SocialAuthController@redirect');
        Route::get('/callback', 'SocialAuthController@callback');
    // Route::get('auth/twitter', 'AuthAuthController@redirectToProvider');
    // Route::get('auth/twitter/callback', 'AuthAuthController@handleProviderCallback');    
/* 
|
| ROUTES HANDEL ENTIRY & USER CONTROLLER INFO 
|
*/      
    Route::resource('user', 'EntriesController');
    // Route::get('/login', 'HomeController@index');
    Route::get('/register', 'HomeController@register');

});
