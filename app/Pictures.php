<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
	protected $primaryKey = 'Pic_id';
   	protected $table = 'picture';
    protected $fillable = ['Pic_name','Temp_id'];
}
