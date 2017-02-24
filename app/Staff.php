<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['Staff_id','Username','Password','Name','Tel','Email','Address','Status','Type'];
}
