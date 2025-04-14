<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pemakaians', function (Blueprint $table) {
           $table->integer('Tahun');
           $table->tinyInteger('Bulan');
           $table->char('NoKontrol', 12);
           $table->integer('MeterAwal');
           $table->integer('MeterAkhir');
           $table->decimal('BiayaBebanPemakai', 10, 2);
           $table->decimal('BiayaPemakaian', 12, 2);

           $table->primary(['Tahun', 'Bulan', 'NoKontrol']);
           $table->foreign('NoKontrol')->references('NoKontrol')->on('pelanggans')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemakaians');
    }
};
