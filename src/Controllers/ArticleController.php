<?php

namespace App\Controllers;

use App\Models\Article;
use App\Resources\ArticleResource;
use Interop\Container\ContainerInterface;

class ArticleController extends Controller
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function get($request, $response, $args)
    {
        $article = Article::findOrFail($args['id']);

        return $this->response($response, (new ArticleResource($article))->toJson());
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