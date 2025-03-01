<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('metri_events', function (Blueprint $table) {
            if (!Schema::hasColumn('metri_events', column: 'youtube_link')) {
                $table->string('youtube_link')->nullable();
                $table->string('photo_1')->nullable();
                $table->string('photo_2')->nullable();
                $table->string('photo_3')->nullable();
                $table->string('photo_4')->nullable();
                $table->string('photo_5')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('metri_events', function (Blueprint $table) {
            $table->dropColumn(['youtube_link','photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5']);
        });
    }
};
