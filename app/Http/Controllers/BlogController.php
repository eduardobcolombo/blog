<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index() {
        $posts = [
            0 => [
                'id' => '1',
                'title' => 'The first post',
                'description' => 'Description of my first post',
                'tags' => 'blog, post, first'
            ],
            1 => [
                'id' => '2',
                'title' => 'The second post',
                'description' => 'Description of my second post',
                'tags' => 'blog, post, second'
            ]
        ];
        return view('index', compact('posts'));
    }
}
