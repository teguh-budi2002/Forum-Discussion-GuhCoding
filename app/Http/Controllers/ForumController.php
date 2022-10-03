<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        return view('forum.home-forum');
    }

    public function createQuestion() {
        return view('forum.question');
    }

    public function editQuestion(Post $post) {
        $postSlug = Post::with('categories')->where('slug', $post->slug)->get();
        return view('forum.edit-question', ['posts' => $postSlug]);
    }

    public function showCategoryPost(Category $category) {
            $category_post = Category::with('posts')->where('slug', $category->slug)->get();
            return view('category.categories-post', ['categories' => $category_post]);
    }

    public function showUserPost(Post $post) {
        return view('forum.user-post', [
            'post' => Post::with(['categories', 'users', 'comments.user', 'comments.replies'])->where('slug', $post->slug)->first(),
        ]);
    }

    public function getCategory() {
        $tags = Category::get()->toArray();
        return response()->json([
            'message' => 'Data berhasil di dapatkan!',
            'cat' => $tags
        ]);
}
}
