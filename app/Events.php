<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
	public $timestams =  false;
	protected $primarykey = 'Event_no';
    protected $table = 'events';
    protected $fillable = ['Event_start','Event_place','Temp_id','Act-id','Event_end','Color'];
}
