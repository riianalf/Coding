<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('desa')->nullable()->index();
            $table->string('kecamatan')->nullable()->index();
            $table->string('kabupaten')->nullable()->index();
            $table->string('provinsi')->nullable()->index();
            $table->string('kode')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
