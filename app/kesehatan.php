<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    protected $fillable = [
        'NoIdentitas', 'name', 'NoHP', 'Alamat', 'Keluhan'
    ];
}
