<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'kategori_id', 'nama', 'deskripsi', 'harga', 'stok', 'tanggal_produksi',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}