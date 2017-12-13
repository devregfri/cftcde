<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|minlength:24|unique:users',
            'nik' => 'required|min:16|max:16|unique:users',
            'n_lengkap' => 'required|string|max:125',
            'no_hp' => 'required|string|minlength:12|minlength:12',
            'email' => 'required|string|email|max:150',
            'alamat' => 'required|string|maxlength:150',
            'no_rt' => 'required|min:1|max:11',
            'no_rw' => 'required|min:1|max:11',
            'prop' => 'required',
            'kab' => 'required',
            'kec' => 'required',
            'kel' => 'required',
            'n_cs' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /*return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);*/

        $user = User::create([
            'username' => strtolower($data['username']),
            'nik' => $data['nik'],
            'nama_lengkap' => strtoupper($data['n_lengkap']),
            'handphone' => $data['no_hp'],
            'email' => strtolower($data['email']),
            'password' => bcrypt($data['password']),
            'alamat' => strtoupper($data['alamat']),
            'no_rt' => $data['no_rt'],
            'no_rw' => $data['no_rw'],
            'kode_prop' => $data['prop'],
            'kode_kab' => $data['kab'],
            'kode_kec' => $data['kec'],
            'kode_desa' => $data['kel'],
            'role_id' => $data['role_id'],
            'last_ip' => \Request::ip(),
        ]);
        $user_id = DB::table('users')
                    ->where('nik', $data['nik'])
                    ->select('id')
                    ->first();

        /*data_agen_referral = array(
            'user_id' => $user_id,
            'user_referral_id' => $data['name_agen']
        );*/

        
        if ($data['nik_agen'] != 0) {
            $data_cs_referral = array(
                'cs_id' => $data['n_cs'],
                'agen_id' => $user_id->id
            );
            $data_agen_referral = array(
                'agen_id' => $data['nik_agen'],
                'subagen_id' => $user_id->id
            );
            DB::table('cs_agen_referrals')->insert($data_cs_referral);
            DB::table('agen_subagen_referrals')->insert($data_agen_referral);
        }
        else {
            $data_cs_referral = array(
                'cs_id' => $data['n_cs'],
                'agen_id' => $user_id->id
            );
            DB::table('cs_agen_referrals')->insert($data_cs_referral);
        }

        return $user;
    }

    public function showRegistrationForm()
    {
        $getProvinsi = DB::table('setup_prop')->get();
        $getNik = DB::table('users')
                        ->where('role_id', 21)
                        ->get();
        $getCsMarketing = DB::table('users')
                        ->where('role_id', 5)
                        ->get();
        $data = [
                    'getProvinsi' => $getProvinsi,
                    'getNik' => $getNik,
                    'getCsMarketing' => $getCsMarketing
                ];
        return view('auth.register', $data);
    }  


}
