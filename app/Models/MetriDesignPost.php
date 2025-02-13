<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetriDesignPost extends Model
{
    use HasFactory;

    protected $table = 'metri_design_posts';

    protected $fillable = [
        'title',
        'image',
        'content',
        'link',
    ];
}

