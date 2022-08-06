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
/*
        return response()->json([

                    'Search for Zip Code'         => '/api/zipcode/{ Number Zip Code }',
                    'Search all Zip Code'         => '/api/zipcode/all',
                    'Search all Federal Entity'   => '/api/zipcode/federal',
                    'Search all localities'       => '/api/zipcode/locality',

         ]);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

            return response()->json(["Zip Code not exist"]);

        }else{
            $zip = new ZipCodeResource($zipcode);
            return response()->json([$zip]);
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ZipCode $zipCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(ZipCode $zipCode)
    {
        //
    }
}
