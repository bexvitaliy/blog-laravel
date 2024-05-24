<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts =Post::paginate(3);
        $likedPost = Post::withCount('likedPost')->orderBy('likes_users_count', 'DESC')->get()->take(4);

        return view('post.index', compact('posts', 'likedPost'));
    }

}
