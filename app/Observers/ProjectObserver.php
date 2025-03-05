<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    public function created($model)
    {
        // Pastikan model memiliki title dan image agar tidak error
        if (!isset($model->title) || !isset($model->image)) {
            return;
        }

        // Masukkan data ke dalam tabel projects
        Project::create([
            'title' => $model->title,
            'content' => $model->content ?? null,
            'service_type' => class_basename($model), // Nama model sebagai tipe service
            'image' => $model->iamge, // Ambil gambar pertama
            'created_at' => now(),
        ]);
    }
}
