<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('form_karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('posisi');
            $table->string('hari');
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->decimal('durasi', 5, 2);
            $table->string('pekerjaan');
            $table->enum('status', ['Disetujui', 'Tidak Disetujui', 'Proses'])->default('Proses');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_karyawans');
    }
};
