<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceStoreController extends Controller
{
    //
    function viewEcommerceStore()
    {
        return view('system.stores.ecommerce_store');
    }
}
