<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Accounts;
use DateTime;

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

            $user = Accounts::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = Accounts::updateOrCreate([
                    'username' => $google_user['email'],
                ], [
                    'google_id' => $google_user['id'],
                    'password' => encrypt('123'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
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
