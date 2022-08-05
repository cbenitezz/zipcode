<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ZipCodeResource;
use App\Models\FederalEntity;
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
        return response()->json(['App'       => 'ZipCode',
                                 'Status'    => 'Active',
                                 'Endpoints' => 'zipcode/api/zipcode/#number Code'
                                ]);
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
    public function show(ZipCode $zipcode)
    {

       // $query  = ZipCode::find($zipcode);
        //$query = ZipCode::with('federal_entities')->get();


        $zip = new ZipCodeResource($zipcode);
       // dd($zip);
        return response()->json([$zip]);

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
