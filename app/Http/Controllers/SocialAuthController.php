<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\SocialAccountService;

use Socialite;

use Auth;


class SocialAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::with($provider)->redirect();   
    }   

    public function callback(SocialAccountService $service, $provider)
    {

        // TRYING TO DO BUT DONT KNOW HOW.
        // find if the users pased on provider is in our db
        // and if they are follow the auth login to make sure everything matches up 
        // if they are not create and save info as a new user



    	 //RIGHT NOW IF I UNCOMMENT THIS, I AM ABLE TO LOGIN USING TWITTER
         // BUT I CANNOT SAVE USER INFORMATION TO DB 
         // USER INFO NEEDS TO BE SAVED IN  SOCIAL_ACCOUNTS
        $user = Socialite::with($provider)->user();
        
                $user->getId();
                $user->getNickname();
                $user->getName();
                $user->getEmail();
                $user->getAvatar(); 
            return redirect()->to('home');
         // dd($user);
         // STEP 1: CHECK TO SEE IF THE USER ID IS IN THE USER TABLE 
         // STEP 2: IF USER IS FOUND REDIRECT TO HOME PAGE
         // STEP 3: IF NOT CREATE A NEW USER AND REDIRECT TO SETTINGS PAGE
         
		// THIS IS BASED OFF OF TUT THAT I CANNOT GET TO WORK
        // http://blog.damirmiladinov.com/laravel/laravel-5.2-socialite-twitter-login.html#.Vv75uxMrJhE
        // 
        // $user = $service->createOrGetUser(Socialite::with($provider)->user());
        // $findUser = Social_accounts::where($provider, )
        // auth()->login($user);
        // return redirect()->to('home');   
         
    }
}


