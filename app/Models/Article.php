<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        "judul",
        "konten_singkat",
        "image"
    ];
    public function author()
    {
        return $this->hasOne(User::class);
    }
}