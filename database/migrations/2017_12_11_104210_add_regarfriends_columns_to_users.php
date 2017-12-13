<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegarfriendsColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('nama_lengkap');  
            $table->string('nik')->unique();
            $table->string('handphone', 12)->nullable(); 

            $table->string('alamat');            
            $table->integer('no_rt')->nullable(); 
            $table->integer('no_rw')->nullable(); 
            $table->integer('kode_desa');
            $table->integer('kode_kec'); 
            $table->integer('kode_kab'); 
            $table->integer('kode_prop'); 
            $table->integer('kode_pos')->nullable(); 
            $table->integer('is_luar_negeri')->default(2); 

            $table->integer('role_id');
            $table->integer('update_count')->default(0); 


            $table->timestamp('last_login_at')->nullable();
            $table->timestamp('last_logout_at')->nullable();
            $table->string('last_ip')->nullable();

            $table->integer('status')->default(1);             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('nama_lengkap', 'nik', 'handphone', 'alamat', 'no_rt', 'no_rw', 'kode_desa', 'kode_kec', 'kode_kab', 'kode_prov', 'kode_pos', 'is_luar_negeri', 'role_id', 'update_count', 'last_login_at', 'last_logout_at', 'last_ip', 'status');
        });
    }
}
