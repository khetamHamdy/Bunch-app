<?php

use App\Http\Controllers\Front\frontController;
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

Route::get('/', [frontController::class, 'index'])->name('index.html');
Route::group(['middleware' => 'auth'], function () {
    Route::get('about', [frontController::class, 'about'])->name('about.html');
    Route::get('careers', [frontController::class, 'careers'])->name('careers.html');
    Route::get('client', [frontController::class, 'client'])->name('clients.html');
    Route::get('contact', [frontController::class, 'contact'])->name('contact.html');
    Route::get('join', [frontController::class, 'join'])->name('join.html');
    Route::get('policy', [frontController::class, 'policy'])->name('policy.html');
    Route::get('tearms', [frontController::class, 'tearms'])->name('tearms.html');

    Route::post('contact', [frontController::class, 'store_contact'])->name('store_contact.html');
    Route::post('career', [frontController::class, 'store_career'])->name('store_career.html');
    Route::post('join', [frontController::class, 'store_join'])->name('store_join.html');

    Route::get('profileUser.html', [frontController::class, 'profileUser'])->name('profileUser');
    Route::put('/profileUser.html/{id}', [frontController::class, 'profileUserUpdate'])->name('profileUpdateUser');

    Route::get('search', [frontController::class, 'search'])->name('search.html');
});
