<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhysicalStoreController extends Controller
{
    //
    function viewPhysicalStore()
    {
        return view('system.stores.physical_store');
    }
}
