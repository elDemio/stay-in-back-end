<?php

namespace App\Http\Resources\API\V1\Amenity;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AmenityCollection extends ResourceCollection
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
            'type' => 'Amenities'
        ];
    }
}
