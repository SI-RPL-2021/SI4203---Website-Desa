<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratonline extends Model
{
    protected $fillable = [
        'NoIdentitas', 'name', 'email', 'NoHP', 'jenis', 'Alamat', 'pesan'
    ];
}
