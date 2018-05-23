<?php

namespace App\Resources;


class ArticleResource extends BaseResource
{
    public function format()
    {
        return [
            'title' => $this->resource->title,
            'body' => $this->resource->body
        ];
    }
}