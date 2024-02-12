<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PingPongControleur;
use App\Http\Controllers\ContactsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['titre'=>'Mon premier site']);
});
Route::get('/ping', [PingPongControleur::class, 'ping']); 
// Définissez la route /ping
Route::get('/pong', [PingPongControleur::class, 'pong']); 
Route::get('contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactsController::class, 'store'])->name('contact.store');

// Définissez la route /pong

//Route::get('/ping', function (){
   // return view('ping');
//});
//Route::get('/pong', function (){
   // return "ping";
//});
