<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\County;
use App\Models\Location;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Collection::get();
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result=Collection::with('trails')->select('id','name','subTitle','iconImage')->find($id);
        //將location.name 及 county.name 接在一起
        foreach($result['trails'] as $trail){
            $location=Location::where('id',$trail['location_id'])->first();
            $county_id=$location['county_id'];
            $county=County::where('id',$county_id)->first();
            $trail['location']=$county['name'].$location['name'];
            $trail=$trail->makeHidden(['location_id','difficulty','evaluation','altitude','created_at','updated_at','pivot']);
        }
        return $result;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
