<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Laundry;
use App\Models\Using;
use Illuminate\Support\Facades\Auth;



class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $guest = null ;

        if(Auth::guest()){
            $guest['msg'] = '로그인이 필요합니다.';
            $guest['url'] = './login';
        }

        // $recenUsings = Using::all()->where();
        
        
        $getRecentUsing = Using::select('laundry_id', DB::raw('MAX(created_at) as created_at'))->groupBy('laundry_id')->get();
        
         foreach ($getRecentUsing as $item){
             $usingLaundryId[] = $item->laundry_id;
             $usingCreatedAt[] = (string)$item->created_at;
         }

        $usingRecent = Using::select('*')->whereIn('laundry_id',$usingLaundryId)->whereIn('created_at', $usingCreatedAt);
        
        
        $laundries = 
        Laundry::leftJoinSub($usingRecent, 'usings', function($join){
            $join->on('usings.laundry_id', '=', 'laundries.id');
        })
        ->orderBy('laundries.name')
        ->get([
            'laundries.id',
            'laundries.name',
            'laundries.sort',
            'usings.created_at',
            'usings.id as using_id',
            'usings.user_id',
            'usings.status',
            'usings.duration_time'
        ]);

        return $guest ? 
        view('popup.index',['guest' => $guest]) : 
        view('laundry.index', ['laundries' => $laundries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 기계 추가 입력시 보여지는 화면 (관리자)
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
     * 
     * 기계가 더 들어온다면 필요한 기능 (관리자)
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
     * 
     * 세탁실 내부 각 기계 페이지
     */
    public function show($id)
    {
        $laundry = Laundry::leftJoin('usings', 'usings.laundry_id','=','laundries.id')
        ->orderBy('sort')
        ->where('laundries.id', $id)
        ->get([
            'laundries.id',
            'laundries.name',
            'laundries.sort',
            'usings.id as using_id',
            'usings.user_id',
            'usings.status',
            'usings.duration_time'
        ]);
       
        return view('laundry.show',['laundry' => $laundry]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laundry = Laundry::find($id)->first();
        return view('laundry.edit')->with('laundry', $laundry);
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
         //create 대신 make를 쓰면 아래에 save() 사용 필
         $laundries = Laundry::where($id)
            ->update([ // Model을 잘 만들어놔야 가져다가 쓸 수 있음
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'sort' => $request->input('sort'),
            'buy_when' => $request->input('buy_when')
        ]);

        redirect('/laundry');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laundry = Laundry::where($id)->first();

        $laundry->delete();

        return redirect('/laundry');
    }
}
