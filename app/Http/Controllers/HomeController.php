<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
//        sleep(4); //wait 4 seconds

        $posts = Post::latest()->take(10)->paginate(10);

        return Inertia::render('Home',[
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }


}
