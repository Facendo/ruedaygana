<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');

Route::view('/compra', 'compra')->name('compra');


require __DIR__.'/auth.php';
