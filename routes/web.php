<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\LoginController;  

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


route::get('/logout',function(){
    if(session()->has('name')){
        session()->pull('name',null);
    }
    return redirect('login');
});

route::get('login',function(){
    if(session()->has('name')){
        return redirect('home');
    }
    return view('login');
});

Route::get('registration', [RegistrationController::class, 'create']);
Route::post('register', [RegistrationController::class, 'store'])->name('datastore');

Route::get('home',[LoginController::class, 'index']);
Route::get('view/{id}',[RegistrationController::class, 'show']);
Route::get('edit/{id}',[RegistrationController::class, 'edit']);
// Route::post('edit/{id}',[RegistrationController::class, 'update']);
