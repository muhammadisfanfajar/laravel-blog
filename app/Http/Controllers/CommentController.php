<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Add Comment to the post
     *
     * @param Post $post
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post, Request $request)
    {
        $this->validate($request, [
            'body' => 'required|min:2'
        ]);

        $post->addComment($request->body);

        return back();
    }
}
