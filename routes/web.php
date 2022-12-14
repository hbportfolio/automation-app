<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',
    [HomeController::class, 'index'])->middleware('visitor');

Route::get('/conditions',
    [HomeController::class, 'conditions'])->middleware('visitor');

Route::get('/privacy',
    [HomeController::class, 'privacy'])->middleware('visitor');

Route::post('/newsletter',
    [HomeController::class, 'newsletter']);

Route::post('/contact',
    [MailController::class, 'sendMail']);

Route::get('/admin/login',
    [AdminController::class, 'login'])->middleware('guest')->name('login');

Route::get('/admin',
    [AdminController::class, 'index'])->middleware('auth');

Route::get('/admin/messages',
    [AdminController::class, 'messages'])->middleware('auth');

Route::get('/admin/messages/{contact}/edit',
    [AdminController::class, 'edit'])->middleware('auth');

Route::put('/admin/messages/{updated_contact}/update',
    [AdminController::class, 'update'])->middleware('auth');

Route::post('/admin/login/authenticate', 
    [AdminController::class, 'authenticate'])->middleware('guest');

Route::post('/admin/logout',
    [AdminController::class, 'logout'])->middleware('auth');


// Articles Admin side
Route::get('admin/articles',
    [AdminController::class, 'articles'])->middleware('auth');

Route::get('admin/articles/new',
    [AdminController::class, 'newArticle'])->middleware('auth');

Route::post('admin/articles/new',
    [AdminController::class, 'newArticleCreate'])->middleware('auth');

Route::get('/admin/articles/{article}/edit',
    [AdminController::class, 'editArticle'])->middleware('auth');

Route::put('/admin/articles/{updated_article}/update',
    [AdminController::class, 'updateArticle'])->middleware('auth');

Route::delete('/admin/articles/{delete_article}',
    [AdminController::class, 'destroyArticle'])->middleware('auth');


// Articles User side
Route::get('/articles',
    [ArticleController::class, 'index'])->middleware('visitor');

Route::get('/articles/{article:article_slug}',
    [ArticleController::class, 'article'])->middleware('visitor');