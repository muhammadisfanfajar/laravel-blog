<?php

namespace App\Providers;

use App\Model\Post;
use App\Model\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $archives = Post::archives();
        $tags = Tag::has('posts')->get();

        View::composer('layouts.sidebar', function ($view) use ($archives, $tags) {
            $view->with(compact('archives', 'tags'));
        });
    }
}
