<?php

namespace App\Controllers;


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
        die($args['id']);
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