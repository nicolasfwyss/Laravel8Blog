<?php

namespace App\View\Components\Post;

use App\Models\Post;
use Illuminate\View\Component;

class Newest extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $posts = Post::latest()
            ->active()
            ->limit(5)
            ->get();


        return view('components.post.newest', compact('posts'));
    }
}
