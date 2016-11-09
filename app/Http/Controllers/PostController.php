<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
	public function show($year, $month, $slug)
	{
		$post = Post::whereYear('created_at', $year)
			->whereMonth('created_at', $month)
			->where('slug', '=', $slug)
			->first();
			
		return view('post', ['post' => $post]);
	}

}
