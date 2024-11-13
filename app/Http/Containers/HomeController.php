<?php

namespace Sangarius\SlimBlog\Http\Containers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Sangarius\SlimBlog\Models\Post;

class HomeController
{
    protected $postModel;

    public function __construct(Post $postModel)
    {
        $this->postModel = $postModel;
    }

    public function index(Request $request, Response $response, $args = []): Response
    {
        $posts = $this->postModel->getAll();

        return view($response, 'home.index', compact('posts'));
    }

    public function show(Request $request, Response $response, $name): Response
    {
        $hello = "Hello: $name";
        return view($response, 'home.index', compact('hello'));
    }
}
