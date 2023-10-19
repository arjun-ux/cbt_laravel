<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];

    // function for hasOne to User
    public function User(){
        return $this->hasOne('App\Models\User');
    }
    // function for hasOne to Siswa
    public function Siswa(){
        return $this->hasOne('App\Models\Siswa');
    }
}
