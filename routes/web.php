<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/auts', \App\Livewire\Auts\Index::class)->name('auts.index');
Route::get('/auts/create', \App\Livewire\Auts\Create::class)->name('auts.create');
Route::get('/auts/show/{aut}', \App\Livewire\Auts\Show::class)->name('auts.show');
Route::get('/auts/update/{aut}', \App\Livewire\Auts\Edit::class)->name('auts.edit');

Route::get('/libs', \App\Livewire\Libs\Index::class)->name('libs.index');
Route::get('/libs/create', \App\Livewire\Libs\Create::class)->name('libs.create');
Route::get('/libs/show/{lib}', \App\Livewire\Libs\Show::class)->name('libs.show');
Route::get('/libs/update/{lib}', \App\Livewire\Libs\Edit::class)->name('libs.edit');

Route::get('/libs/search', 'librosController@search')->name('libs.search');
