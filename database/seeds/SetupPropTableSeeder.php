<?php

use Illuminate\Database\Seeder;

class SetupPropTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setup_prop')->insert([
			[
				'no_prop' => '11',
				'nama_prop' => 'Aceh'
			],
			[
				'no_prop' => '12',
				'nama_prop' => 'Sumatera Utara'
			],
			[
				'no_prop' => '13',
				'nama_prop' => 'Sumatera Barat'
			],
			[
				'no_prop' => '14',
				'nama_prop' => 'Riau'
			],
			[
				'no_prop' => '15',
				'nama_prop' => 'Jambi'
			],
			[
				'no_prop' => '16',
				'nama_prop' => 'Sumatera Selatan'
			],
			[
				'no_prop' => '17',
				'nama_prop' => 'Bengkulu'
			],
			[
				'no_prop' => '18',
				'nama_prop' => 'Lampung'
			],
			[
				'no_prop' => '19',
				'nama_prop' => 'Kepulauan Bangka Belitung'
			],
			[
				'no_prop' => '21',
				'nama_prop' => 'Kepulauan Riau'
			],
			[
				'no_prop' => '31',
				'nama_prop' => 'DKI Jakarta'
			],
			[
				'no_prop' => '32',
				'nama_prop' => 'Jawa Barat'
			],
			[
				'no_prop' => '33',
				'nama_prop' => 'Jawa Tengah'
			],
			[
				'no_prop' => '34',
				'nama_prop' => 'Daerah Istimewa Yogyakarta'
			],
			[
				'no_prop' => '35',
				'nama_prop' => 'Jawa Timur'
			],
			[
				'no_prop' => '36',
				'nama_prop' => 'Banten'
			],
			[
				'no_prop' => '51',
				'nama_prop' => 'Bali'
			],
			[
				'no_prop' => '52',
				'nama_prop' => 'Nusa Tenggara Barat'
			],
			[
				'no_prop' => '53',
				'nama_prop' => 'Nusa Tenggara Timur'
			],
			[
				'no_prop' => '61',
				'nama_prop' => 'Kalimantan Barat'
			],
			[
				'no_prop' => '62',
				'nama_prop' => 'Kalimantan Tengah'
			],
			[
				'no_prop' => '63',
				'nama_prop' => 'Kalimantan Selatan'
			],
			[
				'no_prop' => '64',
				'nama_prop' => 'Kalimantan Timur'
			],
			[
				'no_prop' => '65',
				'nama_prop' => 'Kalimantan Utara'
			],
			[
				'no_prop' => '71',
				'nama_prop' => 'Sulawesi Utara'
			],
			[
				'no_prop' => '72',
				'nama_prop' => 'Sulawesi Tengah'
			],
			[
				'no_prop' => '73',
				'nama_prop' => 'Sulawesi Selatan'
			],
			[
				'no_prop' => '74',
				'nama_prop' => 'Sulawesi Tenggara'
			],
			[
				'no_prop' => '75',
				'nama_prop' => 'Gorontalo'
			],
			[
				'no_prop' => '76',
				'nama_prop' => 'Sulawesi Barat'
			],
			[
				'no_prop' => '81',
				'nama_prop' => 'Maluku'
			],
			[
				'no_prop' => '82',
				'nama_prop' => 'Maluku Utara'
			],
			[
				'no_prop' => '91',
				'nama_prop' => 'Papua Barat'
			],
			[
				'no_prop' => '94',
				'nama_prop' => 'Papua'
			]
		]);
    }
}
