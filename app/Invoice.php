<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Client;
class Invoice extends Model
{
    protected $fillable = [
        'client_id', 'status', 'due_date','tax','discount',
        'amount_total','amount_due','note'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    // public function product()
    // {
    //     return $this->belongsTo('App\Product');
    // }
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
