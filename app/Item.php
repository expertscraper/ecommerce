<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class Item extends Model
{
    protected $fillable = [
        'invoice_id','item_name','customer_id','quantity','price'
        ,'unit','due_date','grand_total','total','discount','tax'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
    // public function customer()
    // {
    //     return $this->belongsTo(Customer::class);
    // }

    // public function client()
    // {
    //     return $this->belongsTo(Client::class);
    // }
    // public function product()
    // {
    //     return $this->belongsTo('App\Product');
    // }
    // public function product()
    // {
    //     return $this->hasOne(Product::class);
    // }
}
