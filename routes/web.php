<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, "index"])->name('index');
Route::get('/show/{post}', [PostController::class, "show"])->name('show');
Route::get('/create',[PostController::class, "create"])->name('create');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('update');;
Route::post('/posts', [PostController::class, 'store'])->name('store');
Route::delete('/posts/{post}/delete', [PostController::class,'destroy'])->name('delete');

require __DIR__.'/auth.php';
