<?php

class Variety extends \Eloquent {
	protected $fillable = ['variety_name'];

	public function wines()
	{
		return $this->belongsToMany('Wine');
	}
}