<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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

Route::get('/', [pagesController::class,'index'])->name('index');

Route::get('/about', [pagesController::class,'about'])->name('about');
Route::get('/services', [pagesController::class,'services'])->name('services');
Route::get('/project', [pagesController::class,'project'])->name('project');

Route::get('/blog', [pagesController::class,'blog'])->name('blog');
Route::get('/contact', [pagesController::class,'contact'])->name('contact');
