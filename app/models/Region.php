<?php

class Region extends \Eloquent {
	protected $fillable = ['region_name'];

	public function wines()
	{
		return $this->hasMany('Wine');
	}

	public function country()
	{
		return $this->belongsTo('Country');
	}
}