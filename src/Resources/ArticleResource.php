<?php

namespace App\Resources;


class ArticleResource extends BaseResource
{
    public function format()
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'body' => $this->resource->body
        ];
    }
}