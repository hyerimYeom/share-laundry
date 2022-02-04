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

        $laundries = Laundry::all();
        // ->firstOrFail();
        // dd($laundry);

        // $washers = DB::table('laundry')
        //             ->selectRaw('laundry.*, using.status,using.duration_time')
        //             ->join('using', 'laundry.id', '=', 'using.laundry_id','left')
        //             ->where('laundry.sort','=','w')
        //             ->get();
        // $dryers = DB::table('laundry')
        //             ->selectRaw('laundry.*, using.status,using.duration_time')
        //             ->join('using', 'laundry.id', '=', 'using.laundry_id','left')
        //             ->where('laundry.sort','=','d')
        //             ->get();

        return view('laundry.index', ['laundries'=>$laundries]);
        // return view('laundry.index', [
        //     'washers' => json_decode($washers, true),
        //     'dryers' => json_decode($dryers, true)
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('laundry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $laundry = new Laundry();
        // $laundry->name = $request->input('name');
        // $laundry->sort = $request->input('sort');
        // $laundry->buy_when = $request->input('buy_when');
        // $laundry->save();

        //create 대신 make를 쓰면 아래에 save() 사용 필
        $laundries = Laundry::create([ // Model을 잘 만들어놔야 가져다가 쓸 수 있음
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'sort' => $request->input('sort'),
            'buy_when' => $request->input('buy_when')
        ]);

        return redirect('/laundry');
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
       // findOrFail() // 없으면 404페이지 return

        // $laundry = json_decode($laundry,true);
        // dd($laundry);

        return view('laundry.show');
        //->with('laundry', $laundry);
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
