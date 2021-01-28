<?php

use Illuminate\Support\Facades\Route;
//use Controller
use App\Http\Controllers\Admin\admin;
use App\Http\Controllers\Admin\Modifier;
use App\Http\Controllers\Admin\Supprimer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Route Admin
Route::get('/admin',[admin::class,'authorized']);

Route::get('/admin/user/modifier',[Modifier::class,'authorizedUser']);
Route::post('/admin/user/modifier',[Modifier::class,'modifierUser']);

Route::get('/admin/user/supprimer',[Supprimer::class,'authorizedUser']);
Route::post('/admin/user/supprimer',[Supprimer::class,'supprimerProduit']);