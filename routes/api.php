<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ZipCodeController as ZipV1;
use App\Http\Controllers\Api\V1\FederalController as FedV1;



Route::apiResource('zipcode', ZipV1::class)->only(['index','show']);
Route::apiResource('federal', FedV1::class)->only(['index']);
