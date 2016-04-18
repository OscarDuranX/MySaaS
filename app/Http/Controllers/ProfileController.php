<?php

namespace App\Http\Controllers;

use App\Profile;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
//    public function profilefunction()
//    {
//        $creator = new CreadorDePerfilesHTML();
//        return Auth::user()->profile($creator);
//    }
//
//    public function showJson()
//    {
//        $creator = new CreadorDePerfilesJson();
//        return Auth::user()->profile($creator);
//    }

    public function show(Profile $profile)
    {
        return $profile->show(Auth::user());
    }

}
