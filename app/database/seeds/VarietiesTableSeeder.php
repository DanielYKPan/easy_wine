<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VarietiesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('varieties')->delete();

		Variety::create(array('variety_name'=>'Cabernet Blends'));
		Variety::create(array('variety_name'=>'Cabernet Sauvignon'));
		Variety::create(array('variety_name'=>'Grenache'));
		Variety::create(array('variety_name'=>'Merlot'));
		Variety::create(array('variety_name'=>'Pinot Noir'));
		Variety::create(array('variety_name'=>'Red Blends'));
		Variety::create(array('variety_name'=>'Rosé'));
		Variety::create(array('variety_name'=>'Shiraz'));
		Variety::create(array('variety_name'=>'Shiraz Blends'));
		Variety::create(array('variety_name'=>'Chardonnay'));
		Variety::create(array('variety_name'=>'Moscato'));
		Variety::create(array('variety_name'=>'Pinot Gris'));
		Variety::create(array('variety_name'=>'Riesling'));
		Variety::create(array('variety_name'=>'Sauvignon Blanc'));
		Variety::create(array('variety_name'=>'Semillon'));
		Variety::create(array('variety_name'=>'Sem Sauv Blends'));
		Variety::create(array('variety_name'=>'Verdelho'));
		Variety::create(array('variety_name'=>'White Blends'));
		Variety::create(array('variety_name'=>'Champagne'));
		Variety::create(array('variety_name'=>'Sparkling Whites'));
		Variety::create(array('variety_name'=>'Sparkling Reds'));
	}

}