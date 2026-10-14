<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;
    protected $fillable = [
    'kode_layanan', 'nama_layanan', 'harga_per_satuan',
    ];
}
