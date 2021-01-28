<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\Produit;

class Modifier extends Controller
{

    public function authorizedUser(){
        if (auth()->user()->value('email') == 'admin@admin');{
            return view('admin/user/modifier');
        }
        return view('/');
    }


    public function modifierUser(Request $request){

        /*$user = */User::all()->where('id',$request->id)->first()->update([ // error update ??? or just Produit::update(....)
            'name' => $request->name,
            'email' => $request->email,
        ]);
        //event(new Registered($user));

        return redirect(RouteServiceProvider::AdminUser);

    }
}
