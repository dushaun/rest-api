<?php

namespace App\Controllers;

use App\Models\Article;
use App\Resources\ArticleResource;
use App\Resources\ErrorResource;
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

        if (!$article) {
            return $this->response($response, null, 404);
        }

        return $this->response($response, (new ArticleResource($article))->toJson());
    }

    public function post($request, $response)
    {
        $payload = $request->getParsedBody();

        if (!isset($payload['title'], $payload['body'])) {
            return $this->response($response, (new ErrorResource([
                'message' => 'Title and Body required'
            ]))->toJson(), 400);
        }

        $article = Article::create([
            'title' => $payload['title'],
            'body' => $payload['body']
        ]);

        if (!$article) {
            return $this->response($response, (new ErrorResource([
                'message' => 'Article cannot be found'
            ]))->toJson(), 404);
        }

        return $this->response($response, (new ArticleResource($article))->toJson());
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