<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FederalEntity extends Model
{
    use HasFactory;


    public function zipCodes()
    {
        return $this->hasMany('App\Models\ZipCode');
    }
}
