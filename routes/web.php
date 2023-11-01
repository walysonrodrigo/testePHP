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
})->name('home');

Route::get('/jobs-index', function () {
    return view('pages.jobs.index');
})->name('jobs.index');

Route::get('/cadastrar-vaga', function () {
    return view('pages.jobs.form');
})->name('jobs.form');

Route::get('/editar-vaga/{id}', function () {
    return view('pages.jobs.form');
})->name('jobsedit.form');

Route::get('/candidates-index', function () {
    return view('pages.candidates.index');
})->name('candidates.index');

Route::get('/cadastrar-profissional', function () {
    return view('pages.candidates.form');
})->name('candidates.form');

Route::get('/applications', function () {
    return view('pages.candidates.applications');
})->name('candidates.applications');

Route::get('/apply', function () {
    return view('pages.candidates.apply');
})->name('candidates.apply');