<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    use HasFactory;

    public function zipCodes()
    {
        return $this->hasMany('App\ZipCode');
    }

    public function settlementType()
    {
        return $this->belongsTo('App\Models\SettlementType','settlement_type_id');
    }
}
