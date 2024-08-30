<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\maincontroller;
use Illuminate\Support\Facades\Route;

    // user

Route::get('/', [maincontroller::class, 'index'])->name('home');


    // admin 

Route::get('/admin', [admincontroller::class, 'index'])->name('admin');
