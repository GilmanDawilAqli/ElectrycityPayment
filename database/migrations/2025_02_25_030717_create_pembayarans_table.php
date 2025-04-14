<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('Tahun');
            $table->tinyInteger('Bulan');
            $table->char('NoKontrol', 12);
            $table->decimal('TotalBayar', 12, 2);
            $table->date('TanggalBayar');
            $table->unsignedBigInteger('petugas_id');
            $table->timestamps();

            $table->foreign('NoKontrol')->references('NoKontrol')->on('pelanggans')->onDelete('cascade');
            $table->foreign('petugas_id')->references('id')->on('penggunas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
