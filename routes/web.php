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

<<<<<<< HEAD

Route::view('login', 'login');
Route::view('logout', 'logout');
// Route::post('registration','registration');
Route::get('registration', [RegistrationController::class, 'create']);
Route::post('registeration', [RegistrationController::class, 'store'])->name('datastore');
=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> ca0c492ec66acc94ed918af6dcb16b2e470d4df0
