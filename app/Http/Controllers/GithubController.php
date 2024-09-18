<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function redirectToGithub(){
        return Socialite::driver('github')->redirect('');
    }

    public function handleGithubCallback(){
        try{

            $user = Socialite::driver('github')->user();
            $findUser = User::where('github_id', $user->id)->first();

            if($findUser){
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            }else{
                $newUser = User::updateOrCreate([
                    'email' => $user->email,
                    'name' => $user->name,
                    'github_id' => $user->id,
                    'password' => encrypt('12345dummy'),
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
