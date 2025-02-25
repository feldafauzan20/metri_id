<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('metri_landing_pages', function (Blueprint $table) {
            $table->id();
            $table->string('counter_1');
            $table->string('counter_2');
            $table->string('counter_3');
            $table->string('counter_4');
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metri_landing_pages');
    }
};
