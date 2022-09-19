<?php

use App\Http\Controllers\dashboard\dashboardController;
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

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/dashboard.html', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/userList.html', [dashboardController::class, 'userList'])->name('userList');
    Route::get('/userAdd.html', [dashboardController::class, 'userAdd'])->name('userAdd');

    Route::get('/userEdit.html/{user}', [dashboardController::class, 'userEdit'])->name('userEdit');
    Route::put('/userUpdate.html/{user}', [dashboardController::class, 'userUpdate'])->name('userUpdate');

    Route::get('/profile.html', [dashboardController::class, 'profile'])->name('profile');
    Route::put('/profileUpdate.html/{id}', [dashboardController::class, 'adminprofile'])->name('profileUpdate');

    Route::get('/ContactList.html', [dashboardController::class, 'contactList'])->name('contactList');
    Route::delete('/ContactList.html/{contact}', [dashboardController::class, 'contactListDelete'])->name('contactListDelete');


    Route::get('/CareersList.html', [dashboardController::class, 'careersList'])->name('careerList');
    Route::delete('/CareersList.html/{career}', [dashboardController::class, 'careerListDelete'])->name('careerListDelete');

    Route::get('/faq.html', [dashboardController::class, 'faq'])->name('faq');

    Route::get('/joinList.html', [dashboardController::class, 'joinList'])->name('joinList');
    Route::delete('/joinList.html/{joinUs}', [dashboardController::class, 'joinListDelete'])->name('joinListDelete');

    Route::get('/home.html', [dashboardController::class, 'basic_information_for_sites'])->name('homeAdd');
    Route::post('/home.html', [dashboardController::class, 'basic_information_for_sites_store'])->name('home_store');

    Route::get('/homeJoinAs.html', [dashboardController::class, 'homeJoinAs'])->name('homeJoinAsAdd');
    Route::post('/homeJoinAs.html', [dashboardController::class, 'homeJoinAs_store'])->name('homeJoinAs_store');

    Route::get('/homeJoinAsList.html', [dashboardController::class, 'homeJoinAsList'])->name('homeJoinAsList');
    Route::delete('/homeJoinAs.html/{homeJoinUs}', [dashboardController::class, 'homeJoinAsDelete'])->name('homeJoinAsDelete');

    Route::get('/homeJoinAsEdit.html/{homeJoinUs}', [dashboardController::class, 'homeJoinAsEdit'])->name('homeJoinAsEdit');
    Route::put('/homeJoinAsEdit.html/{homeJoinUs}', [dashboardController::class, 'homeJoinAs_update'])->name('homeJoinAs_update');

    Route::get('/viewOrderC.html/{career}', [dashboardController::class, 'viewOrderCareer'])->name('viewOrderC');
    Route::post('/viewOrderC.html/{career}', [dashboardController::class, 'viewOrderCareerStore'])->name('viewOrderC_store');

});
