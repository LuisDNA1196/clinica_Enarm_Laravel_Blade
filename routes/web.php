<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SubtopicController;
use App\Http\Controllers\FlashcardController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('topics', TopicController::class)->only(['index', 'show']);

Route::resource('subtopics', SubtopicController::class)->only(['show']);

Route::resource('flashcards', FlashcardController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy',
]);

