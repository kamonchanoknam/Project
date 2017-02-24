<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
   	protected $table = 'picture';
    protected $fillable = ['Pic_id','Pic_name','Temp_id'];
}
