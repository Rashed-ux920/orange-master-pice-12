<?php

use App\Http\Controllers\maincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [maincontroller::class, 'index'])->name('home');
