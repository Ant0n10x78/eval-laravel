<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\Produit;

class Supprimer extends Controller
{
    public function authorizedUser(){
        if (auth()->user()->value('email') == 'admin@admin');{
            return view('/user/supprimer');
        }
        return view('/');
    }

    
    public function supprimerUser(Request $request){

        Produit::all()->where('id',$request->id)->first()->delete();

        return redirect(RouteServiceProvider::AdminUserSupprimer);

    }
    
}
