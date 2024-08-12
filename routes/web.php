<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return "test";
// });
// Route::match(['get', 'post'], '/testmatch', function () {
//     dd('match');
// });
// Route::redirect('/test', '/testmatch');
// Route::view('/welcome', 'welcome');
// Route::get("/user/{id}", function (string $id) {
//     return 'user' . $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{id}/profile', function (string $id) {
//     $url = route('profile', ['id' => 1]);
//     dd($url);
// })->name('profile');

//系統頁面
Route::get('/welcome', function () {
    return view('welcome');
});
//首頁
Route::get('/', function () {
    dd('homepage');
})->name('index');

//詳情
Route::get('/blog/{id}', function ($id) {
    dd('userindex' . $id);
})->where('id', '[0-9]+')->name('blog.show');

//編寫頁面
Route::get('/blog/create', function () {
    dd("編輯文章");
})->name('blog.create');

//提交頁面
Route::post('/blog/create', function () {
    dd("保存文章");
})->name('blog.store');

//修改頁面
Route::get('/blog/{id}/edit', function ($id) {
    dd("修改文章");
})->name('blog.edit');

//提交修改頁面
Route::put('/blog/{id}/edit', function ($id) {
    dd("提交修改文章");
})->name('blog.update');

//刪除頁面
Route::delete('/blog/{id}/edit', function ($id) {
    dd("刪除文章");
})->name('blog.destroy');

//修改文章狀態
Route::patch('/blog/{id}/edit', function ($id) {
    dd("修改文章狀態");
})->name('blog.status');

//用戶頁面
Route::get('/user', function () {
    dd("用戶頁面");
})->name('user.info');

//修改用戶頁面
Route::put('/user', function () {
    dd("修改用戶頁面");
})->name('user.update');

//用戶頭像頁面
Route::get('/user/avatar', function () {
    dd("用戶頁面");
})->name('user.avatar');

//修改用戶頭像頁面
Route::patch('/user/avatar', function () {
    dd("修改用戶頭像頁面");
})->name('user.avatar.update');

//用戶文章
Route::get('/user/blog', function () {
    dd("用戶文章頁面");
})->name('user.blog');

//登入使用 laravel 提供