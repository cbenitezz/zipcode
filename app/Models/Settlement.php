<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    use HasFactory;

    public function zipCodes()
    {
        return $this->hasMany(ZipCode::class);
    }

    public function settlementType()
    {
        return $this->belongsTo(SettlementType::class,'settlement_type_id');
    }
}
