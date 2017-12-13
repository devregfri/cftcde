<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GetWilayahController extends Controller
{
    public function getKabupaten(Request $request)
    {
        $prop = \Request::input('prop');
        $getKabupaten = DB::table('setup_kab')->where('no_prop',$prop)->get();
        return response()->json($getKabupaten, 200);
    }
    public function getKecamatan(Request $request)
    {
        $kab = \Request::input('kab');
        $getKecamatan = DB::table('setup_kec')->where('no_kab',$kab)->get();
        return response()->json($getKecamatan, 200);
    }
    public function getKelurahan(Request $request)
    {
        $kec = \Request::input('kec');
        $getKelurahan = DB::table('setup_kel')->where('no_kec',$kec)->get();
        return response()->json($getKelurahan, 200);
    }
}
