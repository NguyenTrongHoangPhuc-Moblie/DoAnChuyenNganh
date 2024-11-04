<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Accounts;
use Illuminate\Database\QueryException;
use DateTime;

class UserRegistationController extends Controller
{
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        try {
            $input = $request->all();
            Accounts::create([
             'username' => $input['email'],
             'password' => Hash::make($input['password']),
             'created_at' => new DateTime(),
             'updated_at' => new DateTime(),
           ]);
        }catch(QueryException $e) {
            return redirect()->back()->with('error', 'Error registering customer.');
        }
       
       return view('user.thank');
    }
}
