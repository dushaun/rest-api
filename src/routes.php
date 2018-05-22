<?php

use App\Controllers\ArticleController;
use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/articles/{id}', ArticleController::class . ':get');
$app->post('/articles', ArticleController::class . ':post');
$app->put('/articles/{id}', ArticleController::class . ':put');
$app->delete('/articles/{id}', ArticleController::class . ':delete');