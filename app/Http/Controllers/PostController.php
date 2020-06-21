<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$posts = Post::paginate(5); 
    	return view('blog', ['posts' => $posts]);
    }

    public function show($slug)
    {
    	$post = Post::findBySlug($slug);
    	return view('show', ['post'=> $post]);
    }
}
