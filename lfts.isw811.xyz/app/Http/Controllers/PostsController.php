<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post'=>'Hello, this is my fisrt post example',
            'my-second-post'=>'Hello, this is my second post example',
        ];

        if (! array_key_exists($post, $posts)) {
            abort('404', 'sorry post not found'),
        }

        return view('post' , [
            'post' => $posts[$post]
        ]);
    }
}