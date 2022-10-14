<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';
    protected $primarykey ='id';
    protected $fillable = [
        'id','id_user','nama','qty', 'harga',
    ];

    public function der()
    {
        return $this->hasMany(Transaksi::class, 'id_orders', 'id');
    }
}
