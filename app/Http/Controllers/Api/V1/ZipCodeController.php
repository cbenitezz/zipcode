<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ZipCodeCollection;
use App\Http\Resources\V1\ZipCodeResource;
use App\Models\ZipCode;
use Illuminate\Http\Request;


class ZipCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return new ZipCodeCollection(ZipCode::latest()->paginate());

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {

        $zipcode = ZipCode::where('zip_code',$code)->first();
        if(!$zipcode){

            $msg_code ="Zip Code not exist";

        }else{
            $msg_code = new ZipCodeResource($zipcode);
        }

        return response()->json([$msg_code]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */

}
