<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use App\Http\Controllers\Controller;



use App\SocialAccountService;

use App\SocialAccount;

use Socialite;

use Auth;


class SocialAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::with($provider)->redirect();   
    }   
// ISSUES WITH CALLBACK. NOW WHEN I USE FACEBOOK IT DOES THE TWITTER CALLBACK
    public function callback(SocialAccountService $service, $provider)
    {
        $user = Socialite::with($provider)->user();
        // stroing data to our use table and logging them in
            $data = [
                'name' => $user->getName(),
                'provider' => $provider,
                'username' => $user->getNickname(),
                'provider_id' => $user->getId(), 
                'email' => $user->email, 
                'avatar' => $user->avatar_original,                        
            ];
        SocialAccount::firstOrCreate($data);
            return redirect()->to('user');                
            // dd($user);
    }
}



