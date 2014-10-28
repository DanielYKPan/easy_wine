<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class WineDetailsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('wine_details')->delete();
		$wine_id_1 = Wine::where('product_code', '=', 'C601XA')->firstOrFail()->id;
		$wine_id_2 = Wine::where('product_code', '=', 'C190X')->firstOrFail()->id;
		$wine_id_3 = Wine::where('product_code', '=', 'C988X')->firstOrFail()->id;

		WineDetail::create(array('wine_id'=>$wine_id_1, 
									'alcohol'=>12.00, 'vintage'=>'2009',
									'food'=>'ideal as an aperitif, or whole baby snapper baked in rock salt.',
									'oak'=>'unoaked', 'colour'=>'pale yellow with a tinge of green',
									'nose'=>'delicately vinous, with an initial taste of both lime and vine blossom.',
									'background'=>"Moet Chandon began in 1743, beginning in the Royal Courts of Europe 
													and among the aristocracy. The first sparkling  wine was shipped in 1744. 
													The next generation, Jean-Remy Moet played  host to many prominent leaders 
													such as the Emperor Napoleon, the Duke of  Wellington. Alexandre 1 Tsar of all 
													the Russia's among them, as the  Mayor of Epernay. Today Moet Chandon is 
													present in more than 170  countries on 5 continents. Today Moet 
													Chandon recognized that Champagne was not going to be large enough 
													to provide for all the  sparkling wine needs of the world. As such they 
													looked to other countries for viticultural areas that would be able to
													provide premium  grapes for these styles. They have plantings in Brazil, Argentina, 
													California, Spain and Australia.", 'drink_until'=>'2015', 
									'palate'=>"Predominantly Pinot characteristics. Light, persistent sparkle. 
												Very ample in the mouth, with a discreet finish.",
									'description'=>"One of the few Champagne Houses to hold a Royal Warrant to be allowed supply Champagne to the Queen.",
									'usp_1'=>"The world's most recognised Champagne",
									'usp_2'=>"When only the best will do",
									'usp_3'=>"Celebrate in style"));

		WineDetail::create(array('wine_id'=>$wine_id_2, 
									'alcohol'=>12.00, 'vintage'=>'2009', 
									'food'=>'enjoy as an aperitif style',
									'oak'=>'Moderate oak', 'colour'=>'pale gold with green hues',
									'nose'=>'lifted tropical citrus aromas with hints of apple and fresh bread',
									'palate'=>'fresh creamy palate with a citrus finish',
									'description'=>"If you need a celebrate with a crowd, choose Cottonwood Grove 
													as the sparkling wine in everyone's glasses. It's a true all-rounder 
													that everyone will love. With soft, elegant tropical and citrus 
													flavours and a fine, elegant finish, it's the perfect party starter. 
													And just look at the bargain price!",
									'usp_1'=>"Entertain a crowd with Cottonwood Grove!",
									'usp_2'=>'Delicate and stylish sparkling',
									'usp_3'=>'Perfect for parties and celebrations'));
		
		WineDetail::create(array('wine_id'=>$wine_id_3,
								 'vintage'=>'2009', 
								 'alcohol'=>13.50, 
								 'food'=>'Any casual occasion - BBQs, pizza and pasta nights, Mexican food.',
								 'oak'=>'Subtly oaked',
								 'colour'=>'bright ruby red with purple hues',
								 'nose'=>'fragrant blackberry fruit with subtle vanillin characters',
								 'background'=>"Stonyfell dates back to 1858, when Henry Clarke established a winery in what is now suburban Adelaide. In 1920 an association began between the Martin family, the then owners of Stonyfell and the Salter family of the Saltram winery. The outcome was the transfer of winery operations to the Barossa where it remains today.", 
								 'drink_until'=>'2016', 
								 'palate'=>"The attractive, 'sweet' berry fruit is impeccably balanced by natural acidity and soft oak flavours. Ideal for immediate enjoyment (or another couple of years in the cellar) this Shiraz is designed to please no matter when it's opened.",
								 'description'=>'If you love Shiraz, and you love Sparkling, what better way to celebrate a special occasion than with a stunning Sparkling Shiraz!? Sweet and rich, velvety and soft, Sparkling Shiraz is the ultimate in vinous indulgence. This one from Stonyfell is spectacular - enjoy!',
								 'usp_1'=>"Sparkling red - try it and see how good it is!",
								 'usp_2'=>"Sweet and rich, velvety and soft",
								 'usp_3'=>"Chill it down, then pop the cork and enjoy!"));
	}

}