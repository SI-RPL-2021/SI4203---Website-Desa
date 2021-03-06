<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // use HasFactory;
    // protected $table = "articles";
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