<?php

use App\Http\Livewire\Connectyu\Document\Create;
use App\Http\Livewire\Connectyu\Document\Show;
use App\Http\Livewire\Home;
use App\Http\Livewire\ItemShow;
use App\Http\Livewire\ItemUpdate;
use App\Http\Livewire\ItemUpload;
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



Route::get('/', Home::class);
Route::get('/upload', ItemUpload::class);
Route::get('/items/{item}', ItemShow::class);
Route::get('/items/{item}/edit', ItemUpdate::class);

//connectyu documentation routes /**/
Route::get('/documents/create', Create ::class);
Route::get('/documents/{document}', Show::class);

//auth users dashboard route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
