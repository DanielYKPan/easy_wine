<?php

class WineDetail extends \Eloquent {
	protected $fillable = ['wine_id', 'product_type',
							'alcohol', 'foods', 'oak', 'colour', 'nose', 'background',
							'vintage', 'drink_until', 'award', 'palate', 'description',
							'usp_1', 'usp_2', 'usp_3'];

	public function wine()
	{
		return $this->belongsTo('Wine');
	}

	public function getUSPAttribute()
	{
		$USP = $this->select(['usp_1', 'usp_2', 'usp_3'])->firstOrFail()->toArray();
		return $USP;
	}

	public function getAlcoholAttribute($value)
	{
		return $value? $value."%" : null;
	}
}