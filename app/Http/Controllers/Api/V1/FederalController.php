<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FederalCollection;
use App\Http\Resources\V1\FederalResource;
use App\Models\FederalEntity;
use Illuminate\Http\Request;

class FederalController extends Controller
{

    public function Index()
    {

        return new FederalCollection(FederalEntity::latest()->paginate());

    }
}
