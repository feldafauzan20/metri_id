<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('metri_digital_posts', function (Blueprint $table) {
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->text('content');
            $table->string('link')->nullable();
            $table->string('gambar_1')->nullable();
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('gambar_4')->nullable();
            $table->string('gambar_5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('metri_digital_posts', function (Blueprint $table) {
            //
        });
    }
};
