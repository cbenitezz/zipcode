<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;


    public function federalEntity()
    {
        return $this->belongsTo(FederalEntity::class,'federal_entity_id');
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class,'municipality_id');
    }

    public function settlement()
    {
        return $this->belongsTo(Settlement::class,'settlement_id');
    }
}
