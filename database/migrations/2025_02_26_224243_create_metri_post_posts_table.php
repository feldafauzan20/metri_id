<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Membuat tabel metri_Post_posts
        Schema::create('metri_Post_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->text('content');
            $table->string('link')->nullable();
            $table->string('client_name')->nullable();
            $table->integer('year')->nullable();
            $table->string('category')->nullable();
            $table->string('industry')->nullable();
            $table->text('concept')->nullable();
            $table->text('objective')->nullable();
            $table->text('challenge')->nullable();
            $table->text('results')->nullable();
            $table->string('gambar_1')->nullable();
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('gambar_4')->nullable();
            $table->string('gambar_5')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metri_Post_posts');
    }
};