<?php

namespace App\Controllers;


class Controller
{
    public function response($response = '', $content = '', $httpStatus = 200)
    {
        $body = $response->getBody();
        $body->write($content);

        return $response->withStatus($httpStatus)->withBody($body);
    }
}