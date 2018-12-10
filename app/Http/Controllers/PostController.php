<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:api');
	}
	public function getAllPosts()
	{
		$posts = Post::all();

		return response()->json(['data' => $posts]);
	}



}
