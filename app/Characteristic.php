<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
	public function product()
	{
		return $this->belongsTo(\App\Product::class);
	}

    public function characteristicValues()
    {
    	return $this->hasMany(\App\CharacteristicValue::class);
    }
}
