<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AboutMeController;
use App\http\Controllers\SkillsController;
use App\http\Controllers\HobbiesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About_Me', function (){
    return view('About_Me');
});

Route::get('/Skills', function (){
    return view('Skills');
});

Route::get('/Hobbies', function (){
    return view('Hobbies');
});

Route::get('/About_Me', [AboutMeController::class, 'index'])->name('About_Me');
Route::get('/Skills', [AboutMeController::class, 'index'])->name('Skills');
Route::get('/Hobbies', [AboutMeController::class, 'index'])->name('Hobbies');