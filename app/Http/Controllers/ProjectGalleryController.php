<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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
    
        $filter = $request->query('filter'); // Ambil query filter dari URL
        $projects = collect(); // Gunakan Collection kosong untuk menampung hasil
    
        foreach ($tables as $table) {
            if (DB::getSchemaBuilder()->hasTable($table)) {
                $query = DB::table($table)
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
                    $projects = $query->get(); // Ambil hanya data yang sesuai filter
                    break; // Hentikan loop jika filter diterapkan
                } elseif (!$filter) {
                    $projects = $projects->merge($query->get()); // Gabungkan semua data
                }
            }
        }

         // Pagination
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 9; // 3x3 Grid
    $pagedData = $projects->slice(($currentPage - 1) * $perPage, $perPage)->values();

    $projectsPaginated = new LengthAwarePaginator(
        $pagedData,
        $projects->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );

        return view('gallery', compact('projectsPaginated', 'filter'));
    }
}

