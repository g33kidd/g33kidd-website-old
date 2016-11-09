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
		// validate the request
		$this->validate($request, [
			'title' => 'required|max:255',
			'body' => 'required',
			'description' => 'required|max:120',
			'published' => 'required'
		]);

		// create the post on the current user
		$post = $request->user()->posts()->create([
			'title' => $request->input('title'),
			'description' => $request->input('description'),
			'body' => $request->input('body'),
			'published' => $request->input('published'),
		]);

		// respond with the newly created post
		return response()->json($post);
	}

	public function delete(Post $post)
	{
		$post->delete();
		return response(null, 200);
	}

}
