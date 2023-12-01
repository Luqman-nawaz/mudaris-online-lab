<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_courses extends Model
{
    public $guarded = [];
    use HasFactory;

    public function course(){
        return $this->belongsTo(courses::class);
    }
}
