<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('provider_properties', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('provider_id')->unsigned();
            $table->text('property_name');
            $table->longText('property_value');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('provider_properties');
    }
};
