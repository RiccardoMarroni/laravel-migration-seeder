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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 255);
            $table->string('start_station', 255);
            $table->string('end_station', 255);
            $table->dateTime('departure', precision: 0);
            $table->dateTime('arrival', precision: 0);
            $table->unsignedSmallInteger('train_number');
            $table->unsignedTinyInteger('wagons');
            $table->boolean('on_time');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
