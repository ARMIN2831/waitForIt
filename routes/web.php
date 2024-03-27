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
Route::view('/test', 'welcome');
Route::get('/',\App\Livewire\Landing::class);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard',\App\Livewire\Dashboard::class)->name('dashboard');
    Route::get('/dashboard/edit/{id}',\App\Livewire\Dashboard::class)->name('dashboard.edit');
    Route::get('/dashboard/delete/{id}',[\App\Livewire\Dashboard::class,'deleteProject'])->name('dashboard.delete');
    Route::get('/project/{id}',\App\Livewire\Project::class)->name('project.detail');
});

Route::get('/signup/{id}',\App\Livewire\Signup::class)->name('signup');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
