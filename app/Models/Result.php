<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'department_id', 'semester', 'course_id', 'score', 'unit'];

    public function student()
    {
        return $this->belongsTo('App\Models\Students');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
