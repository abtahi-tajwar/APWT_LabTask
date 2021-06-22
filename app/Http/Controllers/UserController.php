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
            return redirect()->route('view-login');
        } else {
            if($user->password !== $req->input('password')) {
                $req->session()->flash('error', 'Invalid credentials');
                return redirect()->route('view-login');
            } else {
                $req->session()->put('uid', $user->id);
                $req->session()->put('type', $user->type);
                return redirect()->route('index');
            }
        }
    }
    function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
    function viewRegister()
    {
        return view('login.register');
    }
    function register(Request $req)
    {

        $req->validate([
            "fullname" => ['required', 'min:3', 'max:30', 'regex:/^[a-zA-Z ]+$/'],
            "username" => 'required',
            "email" => ['required', 'min:10', 'max:50', 'email'],
            "city" => ['min:2', 'max:20'],
            'contry' => ['min:2', 'max:20'],
            'company_name' => ['min:2', 'max:20'],
            "phone" => ['required', 'numeric', 'digits_between:11,15'],
            'password' => ['required', 'min:8', 'max:20', 'regex:/^[\w-]*$/', 'confirmed'],
            'password_confirmation' => 'required'
        ]);

        $user = new User();
        $user->fullname = $req->input('fullname');
        $user->username = $req->input('username');
        $user->email = $req->input('email');
        $user->password = $req->input('password');
        $user->city = $req->input('city');
        $user->country = $req->input('country');
        $user->company_name = $req->input('company_name');
        $user->phone_number = $req->input('phone');
        $user->type = 'active';
        
        $user->save();

        return redirect()->route('view-login');
    }
}
