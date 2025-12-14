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
    Schema::create('trips', function (Blueprint $table) {
        $table->id();
        $table->string('nama_trip');
        $table->enum('tipe_trip', ['open', 'private']);
        $table->string('lokasi');
        $table->date('tanggal');
        $table->integer('durasi_hari');
        $table->integer('harga');
        $table->string('image'); 
        $table->integer('min_pax')->default(1);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
