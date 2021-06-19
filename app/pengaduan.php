<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    protected $fillable = [
        'Nama', 'masalah', 'bukti', 'keterangan'
    ];
}