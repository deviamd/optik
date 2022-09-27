<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produks";
    protected $primarykey = "id_produk";
    protected $fillable = [
        'nama','harga','stok','id'
    ];
    public function Produk()
    {
        return $this->belongsTo(Kategori::class,  'id_produk', 'id');
    }
}
