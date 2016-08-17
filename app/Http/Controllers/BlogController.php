<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
	public function index()
	{
		$posts = Post::where([
			'post_type' => 'post',
			'post_status' => 'publish',
		])->get();

		return view('index', [
			'posts' => $posts,
		]);
	}

	public function show($slug)
	{
		$page = Post::where([
			'post_type' => 'page',
			'post_status' => 'publish',
			'post_name' => $slug,
		])->first();

		if(null == $page){
			abort(404);
		}

		return view('show', [
			'page' => $page,
		]);
	}
}
