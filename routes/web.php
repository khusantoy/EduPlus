<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('users/archive', [\App\Http\Controllers\UsersController::class, 'archive'])->name('users.archive');
    Route::get('users/restore/{id}',[\App\Http\Controllers\UsersController::class,'restore'])->name('users.restore');
    Route::get('users/remove/{id}',[\App\Http\Controllers\UsersController::class,'remove'])->name('users.remove');
    Route::resource('/users', \App\Http\Controllers\UsersController::class);
   Route::resource('/roles', \App\Http\Controllers\RoleController::class);
   Route::resource('/permissions', \App\Http\Controllers\PermissionController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
