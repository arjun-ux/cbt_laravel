<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    // function for belongsTo role
    public function Role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
