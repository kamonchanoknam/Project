<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temple extends Model

{
	// public $timestams =  false;
	protected $primaryKey = 'Temp_id';
    protected $table = 'temple';
    protected $fillable = ['Temp_id','Temp_name','Temp_address','Temp_features','Temp_history','Temp_latitude','Temp_longitude','Staff_id'];
}
