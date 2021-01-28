<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function authorized(){
        if (auth()->user()->value('email') == 'admin@admin');{
            return view('/admin/index');
        }
        return view('/');
    }
}
