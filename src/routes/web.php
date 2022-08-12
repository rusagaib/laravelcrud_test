<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
  return view('home', [
    "title" => "Home"
  ]);
});

Route::group(['middleware' => ['guest']], function() {
  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'auth']);

});

Route::group(['middleware' => ['auth']], function() {
  Route::resource('/customer', CustomerController::class);
  Route::get('/search', [CustomerController::class, 'search']);
  Route::post('/logout', [LoginController::class, 'logout']);
});





