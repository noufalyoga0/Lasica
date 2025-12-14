<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
    $table->id();

    $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
    $table->foreignId('trip_id')->constrained()->cascadeOnDelete();

    $table->string('nama');
    $table->string('email');
    $table->string('no_telp');

    $table->date('tanggal');
    $table->string('paket');

    $table->integer('total_harga')->default(0);

    $table->enum('status', ['pending', 'paid', 'failed'])->default('pending');

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
