<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\Api\V1\ZipCodeController::class, 'index']);


