<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username or password is not matched";
        }
        else {
            $req->session()->put('user', $user);
            return redirect('/');}
            /*return $req -> input();*/
        
    }
    function register(Request $req){
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('login');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $req)
    {
        $user = Socialite::driver('google')->user();

        // Find User
        $authUser = User::where('email', $user->email)->first();
        if($authUser){
            Auth::login($authUser);
            $req->session()->put('user', $authUser);
            return redirect('/');
        }
        else{
            $newUser = new User();
            $newUser->email = $user->email;
            $newUser->name = $user->name;
            $newUser->email_verified_at = Date::now();
            $newUser->provider_id = $user->id;
            $newUser->password = uniqid().Str::random(10); // we dont need password for login. For random number we user Str::random()
            $newUser->save();

            // Login
            Auth::login($newUser);
            $req->session()->put('user', $authUser);
            return redirect('/');
        }
        
    }
}
