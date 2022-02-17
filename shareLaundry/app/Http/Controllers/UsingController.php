<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Using;

class UsingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('ok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('OKstore');

        $usings = Using::create([ 
            'user_id'=> $request->input('user_id'),
            'laundry_id'=> $request->input('laundry_id'),
            'duration_time'=> $request->input('duration_time'),
            'status'=> $request->input('status')
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
        //
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
        //기존 데이터 불러오기?

        //수정
        $using = Using::where($id)
            ->update([ // Model을 잘 만들어놔야 가져다가 쓸 수 있음
                // 'id'=> $request->input('id'),
                // 'user_id'=> $request->input('user_id'),
                // 'laundry_id'=> $request->input('laundry_id'),
                // 'duration_time'=> $request->input('duration_time') ? $request->input('duration_time') : null ,
                'status'=> $request->input('status')
            ]);

        if(!$using){
            //원래 데이터로 롤백
            
        }

        redirect('/laundry');
        //성공여부 넘겨주기 ! (-> 결과값에 따라 각 팝업결과 다름 ?  "성공하였습니다" : "실패하였습니다!")
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancel($using_id)
    {

        // dd($id);
         //기존 데이터 불러오기?

        //수정
        $using = Using::where('id', $using_id)
            ->update([ 
                'status'=> 9
            ]);

        dd(
        $using
        );

        if(!$using){
            //원래 데이터로 롤백
            
        }

        // dd($using);

        return redirect('/laundry');
        //성공여부 넘겨주기 ! (-> 결과값에 따라 각 팝업결과 다름 ?  "성공하였습니다" : "실패하였습니다!")
    }
}
