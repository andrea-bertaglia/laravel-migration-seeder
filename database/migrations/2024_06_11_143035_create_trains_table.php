<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * CREATE TABLE `trains` (
     * `id` VARCHAR(255) NOT NULL,
     * `company` VARCHAR(255) NOT NULL,
     * `departure_station` VARCHAR(255) NOT NULL,
     * `arrival_station` VARCHAR(255) NOT NULL,
     * `departure_time` TIME NOT NULL,
     * `arrival_time` TIME NOT NULL,
     * `train_code` VARCHAR(255) NOT NULL,
     * `number_of_carriages` TINYINT NOT NULL,
     * `on_time` TINYINT DEFAULT(1) NOT NULL,
     * `cancelled` TINYINT NULL,
     * `created_at` TIMESTAMP NULL,
     * `updated_at` TIMESTAMP NULL,
     * PRIMARY KEY (`id`)
     * );
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->tinyInteger('number_of_carriages');
            $table->tinyInteger('on_time')->default(true);
            $table->tinyInteger('cancelled')->nullable();
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
