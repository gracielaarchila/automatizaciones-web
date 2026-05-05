<?php

use App\Http\Controllers\ProfileController;
use App\Models\Plan;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'plans' => Plan::all(),
        'testimonials' => Testimonial::all(),
        'posts' => Post::where('is_published', true)
            ->latest('published_at')
            ->take(3)
            ->get(),
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// 🔥 LISTADO POSTS
Route::get('/aprende', function () {
    return Inertia::render('Aprende/Index', [
        'posts' => Post::where('is_published', true)
            ->latest('published_at')
            ->get(),
    ]);
})->name('learn.index');


// 🔥 DETALLE POST (CORREGIDO)
Route::get('/aprende/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();

    return Inertia::render('Aprende/Show', [ // 👈 IMPORTANTE (ANTES DECÍA Learn)
        'post' => $post,
    ]);
})->name('learn.show');


Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return Inertia::render('Admin/Dashboard');
        })->name('dashboard');
    });

require __DIR__.'/auth.php';