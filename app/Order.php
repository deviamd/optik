<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';
    protected $primarykey ='id';
    protected $fillable = [
        'id','nama','qty', 'harga',
    ];

//     public function produk ()
//     {
//         return $this->belongsTo('App\Produk', 'id_produk');
//     }
}
