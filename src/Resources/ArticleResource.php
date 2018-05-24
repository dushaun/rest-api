<?php

namespace App\Resources;


class ArticleResource extends BaseResource
{
    /**
     * Format resource data to specified array
     *
     * @return array
     */
    public function format()
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'body' => $this->resource->body
        ];
    }
}