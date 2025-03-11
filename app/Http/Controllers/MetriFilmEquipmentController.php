<?php

namespace App\Http\Controllers;
use App\Models\MetriFilmEquipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetriFilmEquipmentController extends Controller
{
    public function index()
    {        
        // Ambil data terbaru dari tabel Metritang-ting
        $data = MetriFilmEquipment::latest()->first([
            'youtube_link',
            'video',
            'photo_1',
            'photo_2',
            'photo_3',
            'photo_4',
            'photo_5',
        ]);

        // Pastikan data tidak null sebelum mengakses propertinya
        if (!$data) {
            return view('service-tang-ting', [
                'youtube_link' => [],
                'video'        => [],
                'photo_1'      => null,
                'photo_2'      => null,
                'photo_3'      => null,
                'photo_4'      => null,
                'photo_5'      => null,
                'projects'     => [],
            ]);
        }

        // Pastikan youtube_link adalah array sebelum dipecah
        $youtube_link = !empty($data->youtube_link) ? explode(',', $data->youtube_link) : [];

        // Pastikan video juga dipecah menjadi array jika berisi data
        $video = !empty($data->video) ? explode(',', $data->video) : [];

        // Konversi setiap link YouTube menjadi embed link jika formatnya valid
        foreach ($youtube_link as &$link) {
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link, $matches)) {
                $link = 'https://www.youtube.com/embed/' . $matches[1];
            } else {
                $link = null; // Jika bukan link valid, jadikan null
            }
        }
        // Hapus elemen null dalam array
        $youtube_link = array_filter($youtube_link);

        // Ambil 3 project terbaru dari tabel metri_tang-ting_posts
        $projects = DB::table('metri_film_equipment_posts')->latest()->take(3)->get();

        // Kirim data ke view
        return view('service-tang-ting', [
            'youtube_link' => $youtube_link,
            'video'        => $video,
            'photo_1'      => $data->photo_1 ?? null,
            'photo_2'      => $data->photo_2 ?? null,
            'photo_3'      => $data->photo_3 ?? null,
            'photo_4'      => $data->photo_4 ?? null,
            'photo_5'      => $data->photo_5 ?? null,
            'projects'     => $projects,
        ]);
    }
}
