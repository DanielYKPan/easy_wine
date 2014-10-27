<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserDetailsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('user_details')->delete();

		$userId = User::where('email', '=', 'myron.yk.pan@gmail.com')->firstOrFail()->id;

		UserDetail::create(array('title'=>'Mr', 'first_name'=>'Yaokun', 'last_name'=>'Pan', 
							'age'=>'18 - 29','address'=>'178 Belmore Rd North', 
							'suburb'=>'Riverwood','postcode'=>'2210','state'=>'NSW', 
							'company_name'=>'UTS','contact_number'=>'0468588570',
							'subscribed'=>true, 'user_id'=>$userId));
	}

}