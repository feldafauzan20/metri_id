<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectGalleryController extends Controller
{
    public function index()
    {
        // Daftar semua tabel yang ingin diambil datanya
        $tables = [
            'metri_design_posts',
            'metri_digital_posts',
            'metri_entertainment_posts',
            'metri_event_posts',
            'metri_film_equipment_posts',
            'metri_film_posts',
            'metri_post_posts',
        ];

        $projects = [];

        foreach ($tables as $table) {
            // Cek apakah tabel benar-benar ada di database
            if (DB::getSchemaBuilder()->hasTable($table)) {
                $data = DB::table($table)
                    ->select(
                        'id',
                        'title',
                        'content',
                        DB::raw("'$table' as service_type"), // Menyimpan nama tabel sebagai service_type
                        'image as image',
                        'created_at'
                    )
                    ->get();
                
                $projects = array_merge($projects, $data->toArray());
            }
        }

        // Mengembalikan data dalam bentuk JSON atau view
        return response()->json($projects);
    }
}
