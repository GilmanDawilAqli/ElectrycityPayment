<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $primaryKey = 'NoKontrol';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['NoKontrol', 'Nama', 'Alamat', 'Telpepon', 'Jenis_Plg'];

    public function pemakaian() {
        return $this->hasMany(pemakaian::class, 'NoKontrol', 'NoKontrol');
    }
}
