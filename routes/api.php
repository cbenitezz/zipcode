<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ZipCodeController as ZipV1;



Route::apiResource('zipcode', ZipV1::class)->only(['show']);
