<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
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

// User-Related Routes.
Route::get('/', [UserController::class, 'fetchHomePageContent']);
Route::get('/article/{id}', [UserController::class, 'fetchOneArticle']);
Route::get('/category/{slug}', [UserController::class, 'fetchCategoryArticles']);
Route::get('/tag/{slug}', [UserController::class, 'fetchAllTags']);
Route::get('/legal', [UserController::class, 'showLegalPage']);
Route::get('/about', function () { return view('about');});
    

// Search-Related Routes.
Route::get('/search', [SearchController::class, 'search'])->name('web.search');