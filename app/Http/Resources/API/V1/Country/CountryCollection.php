<?php

namespace App\Http\Resources\API\V1\Country;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CountryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
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
            'type' => 'Countries'
        ];
    }
}
