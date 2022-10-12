<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksis";
    protected $primarykey = "id_transaksi";
    protected $fillable = [
        'id','id_orders','tanggal','jenis_pembayaran','total_bayar',
    ];

    public function produk()
    {
        return $this->belongsTo('App\Produk','id');
    }
    public function order()
    {
        return $this->belongsTo('App\Order','id_order');
    }
}
