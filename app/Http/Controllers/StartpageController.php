<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartpageController extends Controller
{
    //

    public function index()
    {
        // Letze 5 Beträge, neuste oben, gelöschte ausgeblendet
        //$posts = Post::all()->sortByDesc('created_at'); =
        $posts = Post::with('user')
            ->latest()
            ->active()
            ->limit(10)
            ->get();

        return view('index', compact('posts'));
    }


}
