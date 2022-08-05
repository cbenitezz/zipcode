<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ZipCodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [

            'zip_code' => $this->zip_code,
            'locality' => $this->locality,
            'federal_entity' => [
                'key' => $this->federalEntity->key,
                'name'=> $this->federalEntity->name,
                'code'=> $this->federalEntity->code
            ],
            'settlement' => [
                'Key' => $this->settlement->key,
                'name'=> $this->settlement->name,
                'zone_type' => $this->settlement->zone_type,

                    'settlement' => [
                        'name' => $this->settlement->settlementType->name,
                    ],
            'municipality' => [

                'key' => $this->municipality->key,
                'name'=> $this->municipality->name,
            ]


            ]

        ];
    }
}
