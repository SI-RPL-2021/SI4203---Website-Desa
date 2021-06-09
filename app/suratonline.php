<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratonline extends Model
{
    protected $fillable = [
        'NoIdentitas', 'name', 'Email', 'Alamat', 'Jenis', 'Pesan'
    ];
}
