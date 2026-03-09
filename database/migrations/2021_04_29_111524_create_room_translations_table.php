<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->unsignedBigInteger('room_id');
            $table->unique(['room_id', 'locale']);
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');

            $table->string('name')->default('');
            $table->string('sleeping');
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
        Schema::dropIfExists('room_translations');
    }
}
