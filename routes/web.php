<?php

use App\Http\Controllers\CRUDUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignInController;
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

use App\Http\Controllers\UserController;
use App\Models\SignIn;

// Route::get('login');

// Route::get('user/tampil', [UserController::class, 'tampiluser'])->name('tampiluser')->middleware('auth');
// Route::get('user/tambah', [UserController::class, 'tambahuser'])->name('tambahuser')->middleware('auth');
Route::post('user/simpan', [UserController::class, 'simpanuser'])->name('simpanuser.store');
// Route::get('/user',[UserController::class,'simpanuser']);

Route::get('/', function () {
    return view('test');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test', function ()
{
    return view('CRUD.CRUDUser');
});

Route::get('/signIn', [SignInController::class, 'readInfo']);
Route::get('/CRUDUser', [CRUDUser::class, 'index']);