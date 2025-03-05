<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectGalleryController extends Controller
{
    public function index(Request $request)
    {
        $tables = [
            'metri_design_posts',
            'metri_digital_posts',
            'metri_entertainment_posts',
            'metri_event_posts',
            'metri_film_equipment_posts',
            'metri_film_posts',
            'metri_post_posts',
        ];
    
        $filter = $request->query('filter'); // Ambil query string filter dari URL
        $projects = [];
    
        foreach ($tables as $table) {
            if (DB::getSchemaBuilder()->hasTable($table)) {
                $data = DB::table($table)
                    ->select(
                        'id',
                        'title',
                        'slug',
                        'content',
                        DB::raw("'$table' as service_type"),
                        'image',
                        'created_at'
                    );
    
                if ($filter && $filter === $table) {
                    $data = $data->get()->toArray(); // Ambil hanya data yang sesuai dengan filter
                    $projects = array_merge($projects, $data);
                    break; // Jika filter diterapkan, hentikan loop
                } elseif (!$filter) {
                    $data = $data->get()->toArray();
                    $projects = array_merge($projects, $data);
                }
            }
            
        }
    
        return view('gallery', compact('projects', 'filter'));
    }

   
    

}