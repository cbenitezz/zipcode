<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;


    public function federalEntity()
    {
        return $this->belongsTo('App\Models\FederalEntity','federal_entity_id');
    }

    public function municipality()
    {
        return $this->belongsTo('App\Models\Municipality','municipality_id');
    }

    public function settlement()
    {
        return $this->belongsTo('App\Models\Settlement','settlement_id');
    }
}
