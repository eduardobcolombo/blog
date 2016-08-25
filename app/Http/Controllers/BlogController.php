<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{

    private $posts = [
        0 => [
            'id' => '0',
            'title' => 'The first post',
            'description' => 'Description of my first post',
            'tags' => 'blog, post, first'
        ],
        1 => [
            'id' => '1',
            'title' => 'The second post',
            'description' => 'Description of my second post',
            'tags' => 'blog, post, second'
        ]
    ];

    public function index() {
        $posts = $this->posts;
        return view('index', compact('posts'));
    }

    public function show($id) {
        $post = $this->getPost($id);
        $posts = $this->posts;
        return view('show', compact('post','posts'));
    }

    public function getPost($id){
        return $this->posts[$id];
    }
}
