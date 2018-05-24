<?php

namespace App\Controllers;


class Controller
{
    /**
     * Formatting of responses
     *
     * @param string $response
     * @param string $content
     * @param int $httpStatus
     * @return mixed
     */
    public function response($response = '', $content = '', $httpStatus = 200)
    {
        $body = $response->getBody();
        $body->write($content);

        return $response->withStatus($httpStatus)->withBody($body);
    }
}