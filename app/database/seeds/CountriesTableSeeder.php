<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CountriesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('countries')->delete();

		Country::create(array('country_name'=>'Australia'));
		Country::create(array('country_name'=>'Chile'));
		Country::create(array('country_name'=>'France'));
		Country::create(array('country_name'=>'Italy'));
		Country::create(array('country_name'=>'New Zealand'));
		Country::create(array('country_name'=>'Spain'));
	}
}