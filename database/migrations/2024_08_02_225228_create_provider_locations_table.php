<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('provider_locations', function (Blueprint $table) {
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('provider_id');
            $table->timestamps();

            $table->unique(['location_id', 'provider_id']);

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('provider_locations');
    }
}

