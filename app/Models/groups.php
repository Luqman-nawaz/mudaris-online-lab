<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    use HasFactory;
    public $guarded = [];

    public function users(){
        return $this->belongsToMany(User::class, 'users_groups', 'user_id');
    }
}
