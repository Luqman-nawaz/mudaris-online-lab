<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    public $guarded = [];

    public function labs(){
        return $this->hasMany(labs::class, 'course_id');
    }

    public function students(){
        return $this->belongsToMany(User::class, 'student_courses', 'course_id', 'student_id');
    }

    public function teacher(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
