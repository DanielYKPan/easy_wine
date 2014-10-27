<?php

class UserDetail extends \Eloquent {

	protected $fillable = ['title','first_name','last_name','age','address',
							'suburb','postcode','state','company_name',
							'contact_number','oversea','user_id', 'subscribed'];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function getFullNameAttribute()
    {
        return $this->getAttribute('title').' '.ucfirst($this->getAttribute('first_name')).' '.ucfirst($this->getAttribute('last_name'));
    }

    public function getFullAddressAttribute()
    {
    	return $this->getAttribute('address').' '.$this->getAttribute('suburb').' '.$this->getAttribute('state').' '.$this->getAttribute('postcode');
    }
}