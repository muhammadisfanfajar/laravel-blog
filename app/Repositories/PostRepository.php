<?php

namespace App\Repositories;

use App\Model\Post;

class PostRepository
{
    public function all()
    {
        return Post::all();
    }
}
