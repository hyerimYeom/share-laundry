<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function show($id){

        $err = null;
        
        if($id != Auth::user()->id){
           $err = "여기아님";
        };
        
        $user = User::findOrFail($id);
        $user_name = Auth::user()->name;
        return view('user.profile', [
            'err' => $err,
            'user' => $user,
            'name' => $user_name
        ]);
       
    }
}
