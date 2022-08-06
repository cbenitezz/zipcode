<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class SettlementResource extends JsonResource
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

            'key' => $this->key,
            'name'=> $this->name,
            'zone_type' => $this->zone_type,
                    'settlement_type' => [
                        'name' => new SettlementTypeResource($this->settlementType),
                    ],

        ];
    }
}
