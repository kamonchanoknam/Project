<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
	protected $primaryKey = 'Staff_id';
    protected $table = 'staff';
    protected $fillable = ['Username','Password','Name','Tel','Email','Address','Status','Type'];
}
