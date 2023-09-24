<?php

namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');


        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // $data = Auth::attempt(['email' => $email, 'password' => $password]);
            // dd($data);
            $user = User::where('email', $email)->first();

            Auth::login($user);
            return redirect('/home');
        } else {

            return back()->withErrors(['Invalid credentials !']);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
