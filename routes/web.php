<?php

use Illuminate\Support\Facades\Route;

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


Route::controller(\App\Http\Controllers\MainNumberController::class)->group(function () {
    Route::get('/united-kingdom', 'unitedKingdom')->name('united-kingdom');
    Route::get('/united-kingdom/messages', 'MessagesUnitedKingdom')->name('united-kingdom/messages');

    Route::get('/united-states', 'unitedStates')->name('united-states');
    Route::get('/united-states/messages', 'messagesUnitedStates')->name('united-states/messages');

    Route::get('/georgian', 'georgian')->name('georgian');
    Route::get('/georgian/messages', 'messagesGeorgian')->name('georgian/messages');

    Route::get('/georgian', 'georgian')->name('georgian');
    Route::get('/georgian/messages', 'messagesGeorgian')->name('georgian/messages');

    Route::get('/indonesian', 'indonesian')->name('indonesian');
    Route::get('/indonesian/messages', 'messagesIndonesian')->name('indonesian/messages');
});

Route::get('/create-post', [\App\Http\Controllers\MainNumberController::class, 'createPost'])->name('create-post');










