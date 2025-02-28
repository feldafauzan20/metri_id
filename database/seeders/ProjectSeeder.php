<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\MetriDesignPost;
use App\Models\MetriDigitalPost;
use App\Models\MetriEntertainmentPost;
use App\Models\MetriEventPost;
use App\Models\MetriFilmEquipmentPost;
use App\Models\MetriFilmPost;
use App\Models\MetriPostPost;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $tables = [
            'metri_design_posts' => MetriDesignPost::class,
            'metri_digital_posts' => MetriDigitalPost::class,
            'metri_entertainment_posts' => MetriEntertainmentPost::class,
            'metri_event_posts' => MetriEventPost::class,
            'metri_film_equipment_posts' => MetriFilmEquipmentPost::class,
            'metri_film_posts' => MetriFilmPost::class,
            'metri_post_posts' => MetriPostPost::class,
        ];

        foreach ($tables as $serviceType => $model) {
            $records = $model::all();

            foreach ($records as $record) {
                Project::create([
                    'title' => $record->title,
                    'description' => $record->content ?? '',
                    'image' => $record->gambar_1 ?? null,
                    'service_type' => $serviceType,
                    'service_id' => $record->id,
                ]);
            }
        }
    }
}
