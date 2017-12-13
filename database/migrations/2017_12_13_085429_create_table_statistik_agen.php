<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStatistikAgen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistik_agen', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->integer('agen_id')->unsigned(); 
            $table->foreign('agen_id')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade');
            $table->string('cs',25);
            $table->integer('teman_fb');
            $table->integer('grup_fb');
            $table->integer('teman_bbm');
            $table->integer('fp_fb');
            $table->integer('followers_fp_fb');
            $table->integer('like_fp_fb');
            $table->integer('followers_twitter');
            $table->integer('followers_instagram');
            $table->integer('subscriber_youtube');
            $table->integer('teman_wa');
            $table->integer('postingan_fb');
            $table->integer('share_grup_fb');
            $table->integer('bc_bbm');
            $table->integer('jml_pelayanan');
            $table->integer('jml_slot');
            $table->integer('prognosis');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('statistik_agen');
    }
}
