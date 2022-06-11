<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlockRequest;
use App\Http\Resources\LocRes;
use App\Models\Block;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function userBooking()
    {
        $users = DB::table('users')->get();

        return view('userBooking', ['users' => $users]);
    }

    public function loc(){
        $data = DB::table('locations')
            ->join('blocks', 'locations.id', '=', 'blocks.location_id')
            ->select('Locations.*', 'blocks.freeBlocks', 'blocks.volume','blocks.temperature','blocks.shelfLife','Locations.id')
            ->get();

        return view('booking', ['data' => $data]); }


    public function calculate($id){
        $data = new Location();
        return view('form', ['data' => $data]); }

    public function store1()
    {
        $loc = new Block();
        $loc->volume=request('volume');
        $loc->temperature=request('temperature');
        $loc->shelfLife=request('shelfLife');
        $loc->save();
        return redirect('/home');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return LocRes::collection(Location::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function store(BlockRequest $request)
    {
        $vol = $request->input('volume');
        $data = DB::table('blocks')->pluck('freeBlocks');
        $freeBlocks='freeBlocks';
        $volume=$vol/2;
        if ($volume<$freeBlocks){
            echo 'мало блоков';
        }else{return view('booking'); }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return LocRes
     */
    public function show($id)
    {
        return new LocRes(Location::with('lists')->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
