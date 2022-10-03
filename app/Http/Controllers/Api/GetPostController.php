<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GetPostController extends Controller
{
    public function getAllPostHomeForum(){
        return response()->json([
            'posts' => Post::with(['categories', 'users'])->latest()->paginate(8),
        ], 200);
    }
}
