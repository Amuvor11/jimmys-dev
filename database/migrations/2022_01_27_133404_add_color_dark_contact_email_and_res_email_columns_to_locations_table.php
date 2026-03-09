<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorDarkContactEmailAndResEmailColumnsToLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->string('color')->nullable()->after('images');
            $table->boolean('dark')->nullable()->after('color');
            $table->string('contact_email')->nullable()->after('title');
            $table->string('res_email')->nullable()->after('contact_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn('color');
            $table->dropColumn('dark');
            $table->dropColumn('contact_email');
            $table->dropColumn('res_email');
        });
    }
}
