<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    // 🔥 LISTADO
    public function index()
    {
        return Inertia::render('Aprende/Index', [
            'posts' => Post::where('is_published', true)
                ->latest('published_at')
                ->get(),
        ]);
    }

    // 🔥 DETALLE
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return Inertia::render('Aprende/Show', [
            'post' => $post,
        ]);
    }
}