<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::take(10)->get();

        return Inertia::render('Home',[
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function login()
    {
        return Inertia::render('Login');
    }
}
