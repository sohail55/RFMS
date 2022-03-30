<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RolesController;


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

Route::post('dashboard', [LoginController::class, 'login'])->name('adminLogin');
Route::get('dashboard', [LoginController::class, 'login'])->name('dashboard');
// Route::group(['prefix' => 'administrator'], function () {
//     Route::post('dashboard', [LoginController::class, 'login'])->name('adminLogin');
// });

Route::get('roles', [RolesController::class, 'getRoles'])->name('roles');
Route::get('subroles', [RolesController::class, 'getSubRoles'])->name('subroles');

