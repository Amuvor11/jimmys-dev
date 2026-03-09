<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('info_slug')->nullable();
            $table->string('fac_pdf')->nullable();
            $table->string('booking_subdomain')->nullable();
            $table->boolean('status')->default(0);
            $table->string('logo');
            $table->string('hero')->nullable();
            $table->string('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('ort')->default('Wien');
            $table->integer('images')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
