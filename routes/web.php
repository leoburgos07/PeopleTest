<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleAdmin;

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
Route::post('/createUser',[App\Http\Controllers\Auth\RegisterController::class, 'createUser'])->name('createUser');

Auth::routes();
Route::get('/listBenefits', [App\Http\Controllers\BenefitController::class, 'index'])->name('listBenefits');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/awards',[App\Http\Controllers\AwardController::class, 'index'] )->middleware(RoleAdmin::class)->name('listAwards');
Route::post('/assignAward',[App\Http\Controllers\AwardController::class, 'assignAward'])->middleware(RoleAdmin::class);
Route::post('/createAward', [App\Http\Controllers\AwardController::class, 'create'])->middleware(RoleAdmin::class);


