<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TypesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('types')->delete();

		Type::create(array('type_name'=>'red'));
		Type::create(array('type_name'=>'white'));
		Type::create(array('type_name'=>'sparkling'));
		Type::create(array('type_name'=>'others'));
	}

}