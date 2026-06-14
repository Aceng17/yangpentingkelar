<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AiTutorController;

Route::redirect('/', '/dashboard');

Route::get(
    '/dashboard',
    [DashboardController::class,'index']
)->name('dashboard');

Route::resource(
    'articles',
    ArticleController::class
);

Route::resource(
    'forum',
    ForumController::class
);

Route::resource(
    'quiz',
    QuizController::class
);

Route::get(
    '/ai-tutor',
    [AiTutorController::class,'index']
)->name('ai.index');