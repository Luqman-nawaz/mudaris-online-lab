<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labs extends Model
{
    use HasFactory;
    public $guarded = [];

    public function course(){
        return $this->belongsTo(courses::class, 'course_id');
    }

    public function stds(){
        return $this->hasMany(labstudents::class, 'lab_id');
    }
}
