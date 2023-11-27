<?php

namespace App\Http\Resources\API\V1\City;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CityCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'Organization' => 'stay_in',
                'authors' => [
                    'Ángel Rivera'
                ]
            ],
            'type' => 'Cities'
        ];
    }
}
