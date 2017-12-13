<?php

namespace App\Http\Controllers;

use App\StatistikAgen;
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

class StatistikAgenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dateNow = Carbon::now();//Carbon::now()->addMonth(1)->format('m');
        $monthNow = $dateNow->month;
        $yearNow = $dateNow->year;
        $get_user = DB::table('users')->where('users.id', Auth::user()->id)
                                    //->leftJoin('user_has_roles', 'users.id', '=', 'user_has_roles.user_id')
                                    ->leftJoin('roles', 'users.role_id', '=', 'roles.id')
                                    ->select('roles.deskripsi')
                                    ->get();
        if ($get_user->name='agen') {
            $get_statistikAgen = DB::table('statistik_agen')
                                    ->where('statistik_agen.agen_id', Auth::user()->id)
                                    ->whereMonth('statistik_agen.tanggal', $monthNow)
                                    ->whereYear('statistik_agen.tanggal', $yearNow)
                                    ->leftJoin('users', 'statistik_agen.agen_id', '=', 'users.id')
                                    ->select('statistik_agen.*', 'users.username as nama_agen')
                                    ->get();
        }
        $data = [
                    'get_statistikAgen' => $get_statistikAgen,
                    'yearNow' => $yearNow
                ];
        return view('statistikAgen.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        $cs_agen_referrals = DB::table('cs_agen_referrals')->where('cs_agen_referrals.agen_id',$user_id)
                                    ->leftJoin('users', 'cs_agen_referrals.cs_id', '=', 'users.id')
                                     ->select('users.*')
                                    ->get();
        $agen_subagen_referrals = DB::table('agen_subagen_referrals')->where('agen_subagen_referrals.subagen_id',$user_id)
                                    ->leftJoin('users', 'agen_subagen_referrals.agen_id', '=', 'users.id')
                                     ->select('users.*')
                                    ->get();
        $data = [
                    'cs_agen_referrals' => $cs_agen_referrals,
                    'agen_subagen_referrals' => $agen_subagen_referrals
                ];
        return view('statistikAgen.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal_insert = Carbon::now('Asia/Jakarta');
        $statistikAgen = new StatistikAgen();
        $statistikAgen->agen_id = $request->id_agen;
        $statistikAgen->cs = $request->n_cs;
        $statistikAgen->genre_agen = $request->g_agen;
        $statistikAgen->teman_fb = $request->f_fb;
        $statistikAgen->grup_fb = $request->j_grup_fb;
        $statistikAgen->teman_bbm = $request->f_bbm;
        $statistikAgen->fp_fb = $request->j_fp_fb;
        $statistikAgen->followers_fp_fb = $request->j_followers_fp_fb;
        $statistikAgen->like_fp_fb = $request->j_like_fp_fb;
        $statistikAgen->followers_twitter = $request->j_followers_twitter;
        $statistikAgen->followers_instagram = $request->j_followers_instagram;
        $statistikAgen->subscriber_youtube = $request->j_subscriber_youtube;
        $statistikAgen->teman_wa = $request->f_wa;
        $statistikAgen->postingan_fb = $request->posting_fb;
        $statistikAgen->share_grup_fb = $request->s_grup_fb;
        $statistikAgen->bc_bbm = $request->bc_bbm;
        $statistikAgen->jml_pelayanan = $request->j_pelayanan;
        $statistikAgen->jml_slot = $request->j_slot;
        $statistikAgen->prognosis = $request->prognosis;
        $statistikAgen->tanggal = $tanggal_insert;
        //
        $varTanggal = $tanggal_insert;
        $varAgenID = $request->id_agen;
        $varGenreAgen = $request->g_agen;
        $getTanggal = DB::table('statistik_agen')
                                    ->where('tanggal',$varTanggal)
                                    ->where('agen_id',$varAgenID)
                                    ->where('genre_agen',$varGenreAgen)
                                    ->select('*')
                                    ->get();

        foreach ($getTanggal as $data) {
            $newId = $data->id; 
        }
        if (empty($newId)) {
            $statistikAgen->save();
            return redirect()->route('statistikAgen.create')->with('success','Statistik added successfully');
        }
        else {
            ?> 
            <script type="text/javascript">
                alert("Mohon maaf coba cek di view, anda sudah pernah input data di tanggal itu dan dengan genre yang sama. Anda hanya bisa sekali melakukan input dalam satu hari dalam satu genre. "); 
                document.location=history.back();
            </script> 
            <?php
            //return redirect()->route('statistikAgen.create')->with('success','Statistik added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StatistikAgen  $statistikAgen
     * @return \Illuminate\Http\Response
     */
    public function show(StatistikAgen $statistikAgen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StatistikAgen  $statistikAgen
     * @return \Illuminate\Http\Response
     */
    public function edit(StatistikAgen $statistikAgen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StatistikAgen  $statistikAgen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatistikAgen $statistikAgen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StatistikAgen  $statistikAgen
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatistikAgen $statistikAgen)
    {
        //
    }
}
