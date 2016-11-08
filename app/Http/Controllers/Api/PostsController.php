<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    
	public function index()
	{
		$posts = Post::with('author', 'categories', 'tags')->get();
		return response()->json($posts);
	}

	public function store(Request $request)
	{
		return response(null, 200);
	}

}
