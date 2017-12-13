<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data_roles = array(
    		array('deskripsi'=>'Administrator',    'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),

    		array('deskripsi'=>'Owner',            'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Direktur',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Manajer',          'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),

    		array('deskripsi'=>'Customer Service', 'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Desainer',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Layouter',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),

    		array('deskripsi'=>'Wamen Produksi',   'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Printing',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Pressing',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Check Dropping',   'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Kurir',            'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Penjahit',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'QC',               'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Packing',          'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Pelunasan',        'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),

    		array('deskripsi'=>'Keuangan',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'IT',               'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Admin Data',       'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),

    		array('deskripsi'=>'Gerai',            'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Agen',             'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Sub Agen',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),
    		array('deskripsi'=>'Customer',         'created_at'=>\Carbon\Carbon::now(),  'updated_at'=>\Carbon\Carbon::now()),  		
		);

        DB::table('roles')->insert($data_roles);  
    }
}
