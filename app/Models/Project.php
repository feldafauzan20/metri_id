<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug', 
        'content', 
        'client_name', 
        'year',
        'category', 
        'industry', 
        'concept', 
        'objective',
        'challenge', 
        'results',
        'video', 
        'image', 
        'gambar_1', 
        'gambar_2',
        'gambar_3', 
        'gambar_4',
        'gambar_5', 
        'link',
    ];
}
