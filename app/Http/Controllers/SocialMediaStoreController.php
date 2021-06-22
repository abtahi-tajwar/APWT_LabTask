<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialMediaStoreController extends Controller
{
    //
    function viewSocialMediaStore()
    {
        return view('system.stores.social_media_store');
    }
}
