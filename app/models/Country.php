<?php

class Country extends \Eloquent {
	protected $fillable = ['country_name'];

	public function wines()
	{
		return $this->hasMany('Wine');
	}
	
	public function regions()
    {
        return $this->hasMany('Region');
    }
}