<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Laundry;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $washers = DB::table('laundry')
                    ->selectRaw('laundry.*, using.status,using.duration_time')
                    ->join('using', 'laundry.id', '=', 'using.laundry_id','left')
                    ->where('laundry.sort','=','w')
                    ->get();
        $dryers = DB::table('laundry')
                    ->selectRaw('laundry.*, using.status,using.duration_time')
                    ->join('using', 'laundry.id', '=', 'using.laundry_id','left')
                    ->where('laundry.sort','=','d')
                    ->get();

        return view('laundry.index', [
            'washers' => json_decode($washers, true),
            'dryers' => json_decode($dryers, true)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
        // Laundry::find($id);
        $laundry =  DB::table('laundry')
                    ->selectRaw('laundry.*, using.status,using.duration_time')
                    ->join('using', 'laundry.id', '=', 'using.laundry_id','left')
                    ->where('laundry.id','=',$id)
                    ->get();

        $laundry = json_decode($laundry,true);
        // dd($laundry);

        return view('laundry.show')->with('laundry', $laundry);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
