<?php

use App\Livewire\About;
use App\Livewire\Admin\Admin;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Struktur;
use App\Livewire\VisiMisi;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/tentang-kami', About::class)->name('about');
Route::get('/kegiatan', \App\Livewire\Event::class)->name('event');
Route::get('/kontak', Contact::class)->name('contact');
Route::get('/visi-misi', VisiMisi::class)->name('visi-misi');
Route::get('/struktur-organisasi', Struktur::class)->name('struktur');

Route::get('/admin', Admin::class)->name('admin');
