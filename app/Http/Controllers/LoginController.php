<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Index(){
        return view('login.index');
    }
    public function Verify(Request $req){
        // echo "I will gotch you later";
        // dd($req);
        echo "Username is: ".$req->uname;

    }

}
