<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $primaryKey = 'Act_id';
    protected $table = 'activity';
    protected $fillable = ['Act_name','Act_detail'];
}
