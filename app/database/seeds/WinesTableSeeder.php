<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WinesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('wines')->delete();

		$Australia_id = Country::where('country_name', '=', 'Australia')->firstOrFail()->id;
		$red_id = Type::where('type_name', '=', 'red')->firstOrFail()->id;
		$region_id = Region::where('region_name', '=', 'Barossa Valley')->firstOrFail()->id;
		
		Wine::create(array('wine_name'=>'Moet Chandon Brut Imperial (6-bottle Case) NV', 
							'price'=>79.99, 'package_size'=>6, 'discount_price'=>59.99,
							'image_path'=>'C601XA.png', 'availability'=>'InStock', 
							'product_code'=>'C601XA', 'type_id'=>$red_id, 
							'country_id'=>$Australia_id, 'region_id'=>$region_id))->varieties()->sync(array(5, 10));

		Wine::create(array('wine_name'=>'Cottonwood Grove Brut Cuvee NV', 
							'price'=>13.99, 'package_size'=>12, 'discount_price'=>7.99,
							'image_path'=>'C190X.png', 'availability'=>'InStock', 
							'product_code'=>'C190X', 'type_id'=>$red_id, 
							'country_id'=>$Australia_id, 'region_id'=>$region_id))->varieties()->sync(array(12));

		Wine::create(array('wine_name'=>'Stonyfell Selection Shiraz Cuvee NV', 
							'price'=>15.99, 'package_size'=>12, 'discount_price'=>8.99,
							'image_path'=>'C988X.png', 'availability'=>'InStock', 
							'product_code'=>'C988X', 'type_id'=>$red_id, 
							'country_id'=>$Australia_id, 'region_id'=>$region_id))->varieties()->sync(array(8));
	}

}