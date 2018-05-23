<?php

namespace App\Controllers;


use App\Models\Article;
use Interop\Container\ContainerInterface;

class ArticleController
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function get($request, $response, $args)
    {
        $article = Article::findOrFail($args['id']);
        $body = $response->getBody();
        $body->write(json_encode($article));

        return $response->withBody($body);
    }

    public function post($request, $response, $args)
    {
        die('post');
    }

    public function put($request, $response, $args)
    {
        die($args['id']);
    }

    public function delete($request, $response, $args)
    {
        die($args['id']);
    }
}