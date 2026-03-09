<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();

            $table->unsignedBigInteger('apartment_id');
            $table->unique(['apartment_id', 'locale']);
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');

            $table->string('name');
            $table->string('booking_url')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartment_translations');
    }
}
