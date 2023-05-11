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
*/$array = [
    /* ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'], */
];




route::view('/', 'home')->name('home');
route::view('/about', 'about')->name('about');
route::view('/portafolio', 'portafolio', compact('array'))->name('portafolio');
route::view('/contact', 'contact')->name('contact');
