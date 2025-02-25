<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetriLandingPage extends Model
{
    use HasFactory;

    protected $table = 'metri_landing_pages'; // Pastikan ini sesuai dengan nama tabel

    protected $fillable = [
        'counter_1',
        'counter_2',
        'counter_3',
        'counter_4',
        'video',
    ];
}