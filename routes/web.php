<?php

use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogIndexController;
use App\Http\Controllers\BlogUserController;
use Illuminate\Support\Facades\Route;

Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

//登入使用 laravel 提供

//創建首頁 blog index route
Route::get('/', [BlogIndexController::class, 'index'])->name('index');

//修改文章狀態
Route::patch('/blog/{id}', [BlogController::class, 'status'])->name('blog.status');

//創建 blog resource route
Route::resource('/blog', BlogController::class)->except(['index']);

//個人訊息頁面
Route::get('/user', [BlogUserController::class, 'infoPage'])->name('user.info');

//修改個人訊息頁面
Route::put('/user', [BlogUserController::class, 'infoUpdate'])->name('user.info.update');

//個人頭像頁面
Route::get('/user/avatar', [BlogUserController::class, 'avatarPage'])->name('user.avatar');

//修改個人頭像頁面
Route::put('/user/avatar', [BlogUserController::class, 'avatarPdate'])->name('user.avatar.update');

//用戶所有文章
Route::put('/user/blog', [BlogUserController::class, 'blog'])->name('user.blog');

//用戶評論 --單行為
Route::post('/user/blog', BlogCommentController::class)->name('blog.comment');
