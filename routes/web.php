<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

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
Route::get('view_post',[PostController::class,'view_post'])->middleware(['auth'])->name('view_post');
Route::post('post_save',[PostController::class,'post_save'])->middleware(['auth'])->name('post_save');

Route::get('edit-form/{id}',[PostController::class,'editForm'])->middleware(['auth'])->name('editForm');

Route::post('edit-save',[PostController::class,'editSave'])->middleware(['auth'])->name('editSave');

Route::get('delete-form/{id}',[PostController::class,'deleteSave'])->middleware(['auth'])->name('deleteSave');

Auth::routes();


Route::get('/home', [App\Http\Controllers\DashboardController::class, 'show_post_list'])->middleware(['auth'])->name('show_post_list');