<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class SetupKelTableSeeder extends CsvSeeder {

	public function __construct()
	{
		$this->table = 'setup_kel';
		$this->filename = base_path().'/database/seeds/csv/setup_kel.csv';
	}

	public function run()
	{
		// Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		DB::table($this->table)->truncate();

		parent::run();
	}
}