<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MembershipController;


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

Route::get('/', [MemberController::class,'displaymember'])->name('displaymember');
Route::get('/trainer', [TrainerController::class,'displaytrainer'])->name('displaytrainer');
Route::get('/membership', [MembershipController::class,'displaymembership'])->name('displaymembership');

Route::post('/createmember', [MemberController::class,'createmember'])->name('createmember');
Route::post('/createtrainer', [TrainerController::class,'createtrainer'])->name('createtrainer');
Route::post('/createmembership', [MembershipController::class,'createmembership'])->name('createmembership');



