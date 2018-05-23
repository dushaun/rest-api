<?php

namespace App\Resources;


class BaseResource
{
    protected $resource;

    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    public function toJson()
    {
        return json_encode($this->format());
    }
}