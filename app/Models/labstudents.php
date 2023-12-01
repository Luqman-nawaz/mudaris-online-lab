<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labstudents extends Model
{
    use HasFactory;
    public $guarded = [];

    public function lab(){
        return $this->belongsTo(labs::class);
    }

    public function student(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
