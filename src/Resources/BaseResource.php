<?php

namespace App\Resources;


class BaseResource
{
    protected $resource;

    /**
     * BaseResource constructor.
     * @param $resource
     */
    public function __construct($resource)
    {
        $this->resource = (object) $resource;
    }

    /**
     * Convert formatted data to JSON
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->format());
    }
}