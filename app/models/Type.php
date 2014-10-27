<?php

class Type extends \Eloquent {
	protected $fillable = ['type_name'];

	public function wines()
	{
		return $this->hasMany('Wine');
	}
}