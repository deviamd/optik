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
    public function produk()
    {
        return $this->hasMany('App\Produk', 'id');
    }
}
