<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
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


        return [

            'zip_code' => $this->zip_code,
            'locality' => $this->locality,
            'federal_entity' => new FederalResource($this->federalEntity),
            'settlement'     => new SettlementResource($this->settlement),
            'municipality'   => new MunicipalityResource($this->municipality),

        ];


    }
}
