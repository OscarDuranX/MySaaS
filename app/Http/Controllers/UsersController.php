<?php

namespace App\Http\Controllers;

use App\CreadorDePerfilesHTML;
use App\User;
use Cache;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users =  Cache::remember('users',10, function(){
            return User::all();
        });

        return $users;
    }

    public function store()
    {
        User::create(['name' => 'Paco','email'=>'pepito@pepita.get']);

        //Cache::forget('query.users');

        Event::fire(new UserHasChanged());
    }

    public function update()
    {
        $user = User::first();

        $user->name="Pepitossss";

        $user->save;

       // Cache::flush();
        Event::forget('user.change');
    }

    public function destroy($id)
    {
        User::destroy($id);

       // Cache::flush(); //Ens carrega tota la base de dades i ens la refresca
        Event::forget('user.change');  // Ens refresca domes el+
    }

}
