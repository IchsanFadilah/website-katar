<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/tentang-kami', \App\Livewire\About::class)->name('about');
Route::get('/kegiatan', \App\Livewire\Event::class)->name('event');
Route::get('/kontak', \App\Livewire\Contact::class)->name('contact');
