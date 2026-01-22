<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| ABOUT
|--------------------------------------------------------------------------
*/
Route::get('/about', function () {
    $name = 'King Jan Paul Jugos';
    $course = 'Bachelor of Science in Information Technology';
    $university = 'Central Mindanao University';

    return view('about', [
        'name' => $name,
        'course' => $course,
        'university' => $university
    ]);
})->name('about');

/*
|--------------------------------------------------------------------------
| PROJECTS
|--------------------------------------------------------------------------
*/
Route::get('/projects', function () {
    $projects = [
        ['title' => 'Project 1', 'description' => 'My first web project'],
        ['title' => 'Project 2', 'description' => 'E-commerce website'],
        ['title' => 'Project 3', 'description' => 'Mobile app design'],
    ];

    return view('projects', compact('projects'));
})->name('projects');

/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/
Route::get('/contact', function () {
    $email = 's.jugos.kingjanpaul@cmj.edu.ph';
    $phone = '+63 999 593 1025';

    return view('contact', compact('email', 'phone'));
})->name('contact');

