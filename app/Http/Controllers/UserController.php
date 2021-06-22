<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
    //
    function viewLogin()
    {
        return view('login.index');
    }
    function login(Request $req)
    {
        $user = User::where('email', $req->input('email'))->first();

        $req->validate([
            'email' => "required|email|max:50",
            "password" => "min:8|max:20",
        ]);

        if($user === null) {
            $req->session()->flash('error', 'Invalid credentials');
            return redirect()->route('login');
        } else {
            if($user->password !== $req->input('password')) {
                $req->session()->flash('error', 'Invalid credentials');
                return redirect()->route('login');
            } else {
                $req->session()->put('uid', $user->id);
                $req->session()->put('type', $user->type);
                return redirect()->route('index');
            }
        }
    }
    function logout(Request $req)
    {
        session()->flush();
        return redirect()->route('login');
    }
}
