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

Route::get('/test', function() {
    return view('test');
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

Route::group(['middleware' => 'web'], function () {
    /* 
    | ROUTES TO ALLOW USERS TO LOGIN IN VIA TWITTER 
    */  
    Route::auth();

    Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
    
    Route::get('/callback/{provider}', 'SocialAuthController@callback'); 
    
    Route::get('/', function () {
        if (Auth::check()) {
            $user = Auth::user()->get();
            $first = Auth::user()->first_name;
            $last = Auth::user()->last_name;
            $bio = Auth::user()->user_bio;
            $photo = Auth::user()->user_photo;
            $fullname = $first.' '.$last;    
            return view('index', compact('fullname'));
        } else {
            return view('index');
        }
        
    });


    Route::get('home', function(){

        return view('home');
});

   
/* 
|
| ROUTES HANDEL ENTIRY & USER CONTROLLER INFO 
|
*/      
    Route::resource('user', 'EntriesController');
    Route::get('user/edit/{id}', 'EntriesController@edit');
    Route::post('user/colorchange', 'EntriesController@colorchange');
    Route::get('user/show/{id}', 'EntriesController@show');
    Route::get('user/destroy/{id}', 'EntriesController@destroy');
    Route::get('/register', 'HomeController@register');

});
