<?php

namespace App\Http\Controllers;

use App\DataStatistikAgen;
use App\Transactions;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use Auth;
use Carbon\Carbon;
use Image;

class DataStatistikAgenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDataStatistikAgen(Request $request)
    {
        $year = \Request::input('year');
        $month = \Request::input('month');
        $get_statistikAgen = DB::table('statistik_agen')
                                    ->where('statistik_agen.agen_id', Auth::user()->id)
                                    ->whereMonth('statistik_agen.tanggal',$month)
                                    ->whereYear('statistik_agen.tanggal', $year)
                                    ->leftJoin('users', 'statistik_agen.agen_id', '=', 'users.id')
                                    ->select('statistik_agen.*', 'users.username as nama_agen')
                                    ->get();
        return response()->json($get_statistikAgen, 200);
    }

    public function getFormStatistikAgen(Request $request)
    {
        $g_agen = \Request::input('g_agen');
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');
        $get_statistikAgen = DB::table('statistik_agen')
                                    ->where('agen_id', Auth::user()->id)
                                    ->where('genre_agen', $g_agen)
                                    ->where('tanggal', $tanggal)
                                    ->get();
        return response()->json($get_statistikAgen, 200);
    }

    public function deleteDataStatistikAgen(Request $request)
    {
        $id_statistik = \Request::input('id_statistik');
        $delete_statistikAgen = DB::table('statistik_agen')->where('id', $id_statistik)->delete();
        return response()->json($delete_statistikAgen, 200);
    }

}
