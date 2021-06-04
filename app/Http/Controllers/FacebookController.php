<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class FacebookController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('remember_token', $user->id)->first();
     
            if($isUser){
                Auth::login($isUser);
                return redirect('/dashboard');
            }else{
                $createUser = User::create([
                    'user_name' => $user->name,
                    'email' => $user->email,
                    'remember_token' => $user->id,
                    'display_name' => 'Facebooker',
                    'password' => 'abc'
                ]);
    
                Auth::login($createUser);
                return redirect()->route('home');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
