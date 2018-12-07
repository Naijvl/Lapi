<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
	public function getAllPosts()
	{
		$posts = Post::all();

		$response = [
			'status' => '',
			'msg'    => '',
			'data'   => $posts
		];

		return json_encode($response);
	}

	public function getPostById($id)
	{
		$post = Post::where('id', $id)->first();

		$response = [
			'status' => '',
			'msg'    => '',
			'data'   => $post
		];

		return json_encode($response);
	}



}
