<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('metri_landing_pages', function (Blueprint $table) {
            $table->id();
            $table->float('counter_1', 1);
            $table->float('counter_2', 1);
            $table->float('counter_3', 1);
            $table->float('counter_4', 1);
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metri_landing_pages');
    }
};