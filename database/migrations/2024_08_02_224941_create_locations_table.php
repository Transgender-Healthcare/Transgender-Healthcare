<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('google_place_id');
            $table->text('display_address');
            $table->longText('google_raw_data')->comment('JSON array')->charset('utf8mb4')->collation('utf8mb4_bin');
            $table->point('latitude');
            $table->point('longitude');
            $table->string('country', 2);
            $table->string('territory')->nullable();
            $table->string('city');
            $table->mediumText('street_address_1');
            $table->mediumText('street_address_2')->nullable();
            $table->timestamps();
        });

        // Add check constraint using raw SQL
        DB::statement('ALTER TABLE locations ADD CONSTRAINT chk_google_raw_data CHECK (json_valid(google_raw_data))');
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
}


