<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public function department()
    {
    	return $this->belongsTo('App\Models\Department', 'department_id');
    }

    public function program()
    {
    	return $this->belongsTo('App\Models\Program', 'program_id');
    }

    public function result()
    {
        return $this->hasMany('App\Models\Result');
    }
}
