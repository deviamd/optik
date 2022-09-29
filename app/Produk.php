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
    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id');
    }
}
