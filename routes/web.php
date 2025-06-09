<?php

use App\Livewire\Todos;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
