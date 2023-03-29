<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warung extends Model
{
    use HasFactory;

    public function komentar()
    {
        return $this->hasMany('App\Komentar','id_wrg','id');
    }
}
