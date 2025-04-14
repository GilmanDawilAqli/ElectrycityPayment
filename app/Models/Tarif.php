<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $primaryKey = 'Jenis_Plg';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['Jenis_Plg', 'BiayaBeban', 'TarifKWH'];
}
