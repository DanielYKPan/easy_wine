<?php

class Wine extends \Eloquent {
	protected $fillable = ['wine_name', 'price', 'package_size', 
							'discount_price', 'image_path', 'availability',
							'product_code'];


	public function wineDetail()
	{
		return $this->hasOne('WineDetail');
	}

	//***************************
	#
	#   Relationships with Type,
	#	Country, Region, Variety,
	#	Wine
	#
	//***************************
	public function type()
	{
		return $this->belongsTo('Type');
	}

	public function country()
	{
		return $this->belongsTo('Country');
	}

	public function region()
	{
		return $this->belongsTo('Region');
	}

	public function varieties()
	{
		return $this->belongsToMany('Variety')->withTimestamps();
	}

    public function scopeWineType($query, array $wine_type)
    {
        return $query->whereHas('type', function($q) use ($wine_type){
                                            $q->whereIn('type_name', $wine_type);
                                        }
                );
    }

	public function getAvailabilityMessageAttribute()
    {
    	switch ($this->getAttribute('availability')) {
    		case 'InStock':
    			$availability_message = "There are plenty in stock.";
    			break;
    		case 'LimitedStock':
    			$availability_message = "Hurry! Limited in stock.";
    			break;
    		case 'OutOfStock':
    			$availability_message = "Sorry, the product is out of stock at the moment.";
    			break;
    		case 'Pre-order':
    			$availability_message = "The product will be ready soon. Pre-order available now.";
    			break; 
    		default:
    			$availability_message = null;
    			break;
    	}
    	return $availability_message;
    }

    public function getVarietiesStringAttribute()
    {
    	$varieties = $this->varieties;
    	$variery_name = array();
    	if(count($varieties) == 0)
    	{
    		return "Non Varietal";
    	}
    	foreach ($varieties as $variety) {
    		array_push($variery_name, $variety->variety_name);
    	}
    	return implode(", ", $variery_name);
    }

    public function getRegionCountryAttribute()
    {
    	$region = $this->region;
        $country = $this->country;

        return $region->region_name.', '.$country->country_name;
    }

    public function getBottlePriceAttribute()
    {
        return $this->getAttribute('price')? "$".$this->getAttribute('price') : null;
    }

    public function getBottleDiscountPriceAttribute()
    {
        return $this->getAttribute('discount_price')? "$".$this->getAttribute('discount_price') : null;
    }

    public function getPackagePriceAttribute()
    {
        return "$".$this->getAttribute('package_size')*$this->getAttribute('price');
    }

    public function getPackageDiscountPriceAttribute()
    {
        return "$".$this->getAttribute('package_size')*$this->getAttribute('discount_price');
    }

    public function getPackageSaveAmountAttribute()
    {
        return '$'.number_format($this->getAttribute('package_size')*($this->getAttribute('price')-$this->getAttribute('discount_price')),2);
    }
}