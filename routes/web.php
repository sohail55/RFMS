<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ComplaintsController;


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
Route::group(['prefix' => 'complaints'], function () {
    Route::get('new', [ComplaintsController::class, 'getNewComplaints'])->name('newComplaints');
    Route::get('assigned', [ComplaintsController::class, 'getAssignedComplaints'])->name('assignedComplaints');
    Route::get('resolved', [ComplaintsController::class, 'getResolvedComplaints'])->name('resolvedComplaints');
    Route::get('closed', [ComplaintsController::class, 'getAssignedComplaints'])->name('closedComplaints');
    Route::get('inProgress', [ComplaintsController::class, 'getInProgressComplaints'])->name('inProgressComplaints');
});

Route::get('roles', [RolesController::class, 'getRoles'])->name('roles');
Route::get('subroles', [RolesController::class, 'getSubRoles'])->name('subroles');
Route::post('createSubRole', [RolesController::class, 'createSubRole'])->name('createSubRole');
Route::get('admins', [UsersController::class, 'getUsers'])->name('admins');
Route::get('responders', [UsersController::class, 'getResponders'])->name('responders');
Route::get('residents', [UsersController::class, 'getResidents'])->name('residents');
//Route::get('newComplaints', [ComplaintsController::class, 'getNewComplaints'])->name('newComplaints');

//Route::get('createSubRole', [RolesController::class, 'createSubRole'])->name('createSubRole');

