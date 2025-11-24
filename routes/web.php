<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SubtopicController;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\CloudServiceController;

// Página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas resource
Route::resource('topics', TopicController::class)->only(['index', 'show']);

Route::resource('subtopics', SubtopicController::class)->only(['show']);

Route::resource('flashcards', FlashcardController::class)->only([
    'index',
    'create',
    'store',
    'edit',
    'update',
    'destroy',
]);

// Página multimedia (audios y videos)
Route::view('/multimedia', 'media.index')->name('media');

// Página de servicios en la nube
Route::get('/servicios-nube', [CloudServiceController::class, 'index'])
    ->name('cloud-services');
