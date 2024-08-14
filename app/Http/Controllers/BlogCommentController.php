<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        dd("用戶評論");
    }
}
