<?php

namespace App\Middleware;


class JsonResponseMiddleware
{
    /**
     * Attach JSON content type header
     *
     * @param $request
     * @param $response
     * @param $next
     * @return mixed
     */
    public function __invoke($request, $response, $next)
    {
        return $next($request, $response->withHeader('Content-Type', 'application/json'));
    }
}