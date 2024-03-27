<?php
use App\Http\Controllers\TopBarController; //kehilangan//
use App\Http\Controllers\TopBarController2; //menemukan//
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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
    return view('landingpage');
});

Route::get('user', function () {
    return view('index');
})->name('user');

Route::post('user',[AuthController::class, 'login']);



Route::get('kehilangan', [TopBarController::class, 'kehilangan'])->name('kehilangan');
Route::get('menemukan', [TopBarController2::class, 'menemukan'])->name('menemukan');
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route::get('/', function () {
//     return view('kehilangan');
// })
// Route::get('register', function () {
//     return view('register');
// })->name('register');

// Route::get('/', function () {
//     return view('pages.welcome');
// })->name('welcome');

// Route::resource('/book', BookController::class);