<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $post = new Post();
        $post->content = 'Hello World';
        $post->likes = 0;
        $post->save();

        return view('dashboard');
    }
}
