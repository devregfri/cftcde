<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'nama_lengkap', 'nik', 'handphone', 'alamat', 'no_rt', 'no_rw', 'kode_desa', 'kode_kec', 'kode_kab', 'kode_prop', 'role_id', 'last_ip',
    ];
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
