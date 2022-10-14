<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksis";
    protected $primarykey = "idt";
    protected $fillable = [
        'id','id_orders','tanggal','jenis_pembayaran','total_bayar',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id', 'id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'id_orders', 'id');
    }
}
