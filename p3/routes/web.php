<?php

use App\Http\Controllers\JoeSearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\View\FileViewFinder;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PracticeController;

Route::any('/practice/{n?}', [PracticeController::class, 'index']);

Route::get('/', [JoeSearchController::class, 'index']);
Route::get('/search', [JoeSearchController::class, 'search']);
Route::get('/history', [JoeSearchController::class, 'history']);