<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategoris";
    protected $primarykey = "id";
    protected $fillable = [
        'nama','jenis'
    ];
    public function product()
    {
        return $this->hasMany(Produk::class, 'id_produk', 'id');
    }
}
