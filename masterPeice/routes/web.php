<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Voyager;

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

Route::get('/', [App\Http\Controllers\NoAuthController::class, 'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job', [App\Http\Controllers\HomeController::class, 'job']);
Route::get('/category/{category_id}', [App\Http\Controllers\NoAuthController::class, 'category']);
Route::get('/post/id/{post_id}', [App\Http\Controllers\NoAuthController::class, 'post']);
Route::get('/poster/{poster_id}', [App\Http\Controllers\NoAuthController::class, 'poster']);
Route::get('/addjob', [App\Http\Controllers\HomeController::class, 'addjob']);
Route::post('/joboffer', [App\Http\Controllers\HomeController::class, 'jobOffer']);
Route::any('/approvedjob', [App\Http\Controllers\HomeController::class, 'approvedJob']);
Route::any('/approvejob/{id}', [App\Http\Controllers\HomeController::class, 'approveJob']);
Route::any('/declinejob/{id}', [App\Http\Controllers\HomeController::class, 'declineJob']);
Route::any('/confirmjob/{id}', [App\Http\Controllers\HomeController::class, 'approvedJob']);
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/about', function(){
    return view('about');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::any('/edituser/{id}', [App\Http\Controllers\HomeController::class, 'edituser']);