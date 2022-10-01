<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = "pembayarans";
    protected $primarykey = "id";
    protected $fillable = [
        'id','tgl_pembayaran','total_bayar','jenis_pembayaran'
    ];
}
