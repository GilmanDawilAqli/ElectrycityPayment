<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = ['Tahun', 'Bulan', 'NoKontrol', 'TotalBayar', 'TanggalBayar', 'petugas_id'];

    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class, 'NoKontrol', 'NoKontrol');
    }
    public function petugas() {
        return $this->belongsTo(Pengguna::class, 'petugas_id', 'id');
    }
}
