<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\User','id_usr','id');
    }

    public function warung()
    {
        return $this->belongsTo('App\Warung','id_wrg','id');
    }

}
