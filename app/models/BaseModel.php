<?php

use Carbon\Carbon;

class BaseModel extends Eloquent
{

	public function getCreatedAtAttribute($value)
	{


		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
		
	}

	public function getUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}


	public static $rules = array(
        'from' => 'required|regex:/^[(a-zA-Z\s)]+$/u|min:3|max:32',
        'email' => 'required|email|',
        'phonenumber' => 'required|numeric|min:5',
        'budget' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
        'address' => 'required|min:9|max:600',
        'body' => 'required|min:3|max:32'
    );


}