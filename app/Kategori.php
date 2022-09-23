<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primarykey = "id";
    protected $fillable = [
        'nama','jenis'
    ];
    public function Kategori()
    {
        return $this->belongsTo('App\Kategori','id');
    }
}
