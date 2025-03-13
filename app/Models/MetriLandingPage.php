<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetriLandingPage extends Model
{
    use HasFactory;

    protected $table = 'metri_landing_pages'; // Pastikan ini sesuai dengan nama tabel

    protected $fillable = [
        'video',
        'youtube_link',
    ];
}
