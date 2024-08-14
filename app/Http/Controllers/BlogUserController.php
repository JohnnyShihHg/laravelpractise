<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogUserController extends Controller
{
    /**
     * 個人訊息頁面
     */
    public function infoPage(string $id)
    {
        dd('個人訊息頁面' . $id);
    }
    /**
     * 修改個人訊息頁面
     */
    public function infoUpdate(string $id)
    {
        dd('修改個人訊息頁面' . $id);
    }
    /**
     * 個人頭像頁面
     */
    public function avatarPage(string $id)
    {
        dd('個人頭像頁面' . $id);
    }
    /**
     * 修改個人頭像頁面
     */
    public function avatarPdate(string $id)
    {
        dd('修改個人頭像頁面' . $id);
    }
    /**
     * 用戶所有文章
     */
    public function blog(string $id)
    {
        dd('修改個人頭像頁面' . $id);
    }
}
