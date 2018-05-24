<?php
/**
 * Created by PhpStorm.
 * User: dushaun
 * Date: 23/05/2018
 * Time: 23:25
 */

namespace App\Resources;


class ErrorResource extends BaseResource
{
    /**
     * Format error data to specified array
     *
     * @return array
     */
    public function format()
    {
        return [
            'success' => false,
            'error' => [
                'message' => $this->resource->message
            ]
        ];
    }
}