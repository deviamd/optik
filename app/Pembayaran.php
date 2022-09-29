<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = "pembayarans";
    protected $primarykey = "id_pembayaran";
    protected $fillable = [
        'tgl_pembayaran','total_bayar','jenis_pembayaran'
    ];
}
