<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GetUserInfoController extends Controller
{
    public function getUsername(Request $request)
    {
        $nik_agen = \Request::input('nik_agen');
        $getUsername = DB::table('users')->where('id',$nik_agen)->get();
        return response()->json($getUsername, 200);
    }
}
