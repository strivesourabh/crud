<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;

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


Route::view('login', 'login');
Route::view('logout', 'logout');
// Route::post('registration','registration');
Route::get('registration', [RegistrationController::class, 'create']);
Route::post('registeration', [RegistrationController::class, 'store'])->name('datastore');
