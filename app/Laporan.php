<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporan";
    protected $primarykey = "id_lap";
    protected $fillable = [
        'id','id_transaksi','tanggal',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','id');
    }

    public function transaksi()
    {
        return $this->belongsTo('App\Transaksi','id_transaksi');
   }
}
