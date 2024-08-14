<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('添加頁面');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('執行添加頁面');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd('查看頁面');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd('編輯頁面' . $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('執行編輯頁面' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('刪除頁面' . $id);
    }

    /**
     * 修改頁面狀態
     */
    public function status(string $id)
    {
        dd('修改頁面狀態' . $id);
    }
}
