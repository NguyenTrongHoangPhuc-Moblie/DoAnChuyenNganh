<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function provider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            //dd($google_user);

            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = User::updateOrCreate([
                    'email' => $google_user['email'],
                ], [
                    'name' => $google_user['name'],
                    'google_id' => $google_user['id'],
                    'password' => encrypt('#N17t052003')
                ]);

                Auth::login($new_user);

                //return redirect()->route('admin.dashboard');
            } else {
                Auth::login($user);
                //return redirect()->route('admin.dashboard');
            }
            return redirect()->route('user.dashboard');
        } catch (\Throwable $th) {
            dd('Something went wrong!' . $th->getMessage());
        }
    }
    // public function redirect(){
    //     return Socialite::driver('google')->redirect();
    // }


}
