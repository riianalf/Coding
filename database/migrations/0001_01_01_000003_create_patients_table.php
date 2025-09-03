<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            // Identitas dasar
            $table->string('nik', 25)->unique();
            $table->string('full_name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();

            // Kontak & alamat (pecah menjadi desa/kecamatan/kabupaten/provinsi)
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            // Kepesertaan BPJS
            $table->string('bpjs_number')->nullable();
            $table->boolean('bpjs_active')->default(false);

            // Data medis dasar
            $table->string('blood_type', 3)->nullable();
            $table->string('marital_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('occupation')->nullable();
            $table->string('nationality')->default('WNI');

            // Kontak darurat
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_relationship')->nullable();
            $table->string('emergency_contact_phone')->nullable();

            // Riwayat medis & alergi
            $table->text('medical_history')->nullable();
            $table->text('allergies')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index('nik');
            $table->index('bpjs_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
