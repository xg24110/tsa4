<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authlogcontroller;
use App\Http\Controllers\taskcontroller;

#landing page
Route::get('/', function () {
    return view('home.index');
})->name('home');

#home page when logged in
Route::get('/li', function () {
    return view('home.li');
})->name('li_home');

#about, task, login page 
Route::get('/about', function () {
    return view('home.about');
})->name('about.index');

Route::get('/about/active', function () {
    return view('home.liabout');
})->name('about.li');

Route::get('/about', function () {
    return view('home.about');
})->name('about.index');

Route::get('/login', function () {
    return view('account.login');
})->name('login');

#edit pages
Route::post('/task/edit/{id}', function () {
    return view('task.task');
})->name('task_edit');

#login authentication and logout route
Route::post('/login', [authlogcontroller::class, 'auth_log'])->name('log.auth');
Route::get('/logout', [authlogcontroller::class, 'end_session'])->name('logout');

#task routes
Route::get('/task', [taskcontroller::class, 'task'])->name('task');
Route::get('/task/create', [taskcontroller::class, 'create'])->name('task.create');
Route::post('/task/store', [taskcontroller::class, 'store'])->name('task.store');
Route::get('/task/edit/{id}', [taskcontroller::class, 'edit'])->name('task.edit');
Route::post('/task/update/{id}', [taskcontroller::class, 'update'])->name('task.update');
Route::delete('/task/{id}', [taskcontroller::class, 'done'])->name('task.done');
