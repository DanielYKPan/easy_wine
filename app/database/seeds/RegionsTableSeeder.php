<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RegionsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('regions')->delete();

		$Australia_id = Country::where('country_name', '=', 'Australia')->firstOrFail()->id;
		$Chile_id = Country::where('country_name', '=', 'Chile')->firstOrFail()->id;
		$France_id = Country::where('country_name', '=', 'France')->firstOrFail()->id;
		$Italy_id = Country::where('country_name', '=', 'Italy')->firstOrFail()->id;
		$New_Zealand_id = Country::where('country_name', '=', 'New Zealand')->firstOrFail()->id;
		$Spain_id = Country::where('country_name', '=', 'Spain')->firstOrFail()->id;

		Region::create(array('region_name'=>'Adelaide Hills', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Barossa Valley', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Bordeaux', 'country_id'=>$France_id));
		Region::create(array('region_name'=>'Champagne', 'country_id'=>$France_id));
		Region::create(array('region_name'=>'Clare Valley', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Coonawarra', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Eden Valley', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Hunter Valley', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Langhorne Creek', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Limestone Coast', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Margaret River', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'Marlborough', 'country_id'=>$New_Zealand_id));
		Region::create(array('region_name'=>'McLaren Vale', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'South Australia', 'country_id'=>$Australia_id));
		Region::create(array('region_name'=>'South East Australia', 'country_id'=>$Australia_id));		
		Region::create(array('region_name'=>'Tasmania', 'country_id'=>$Australia_id));	
		Region::create(array('region_name'=>'Yarra Valley', 'country_id'=>$Australia_id));
	}

}