<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('english_name');
            $table->longText('translations')->comment("JSON array of translations 'lang': 'string'")->charset('utf8mb4')->collation('utf8mb4_bin');
            $table->timestamps();
        });

        // Add check constraint using raw SQL
        DB::statement('ALTER TABLE categories ADD CONSTRAINT chk_translations CHECK (json_valid(translations))');
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
