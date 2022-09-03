<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function student()
    {
        return $this->hasMany('App\Models\Students');
    }

}
