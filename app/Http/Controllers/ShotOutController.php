<?php

namespace App\Http\Controllers;

use App\Events\ShotoutAddedEvent;
use Illuminate\Http\Request;

use App\Http\Requests;


class ShotOutController extends Controller
{
    public function shotout()
    {
        // Venim de processar un formulari simple amb un oto (submit) i un textarea
        // 1) Validar formulari
        // 2) Persistència: migració/ssed etc: shoutout/notification, models
        // 3)


        $shoutout = [];
        event(new ShotoutAddedEvent($shoutout));
    }
}
