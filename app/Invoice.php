<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Customer;
use App\Client;
use App\Item;
class Invoice extends Model
{
    protected $fillable = [
        'customer_id', 'invoice_id','status', 'issue_date','tax','discount',
        'grand_total','total','comment'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

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

    public function item()
    {
        return $this->hasOne(Item::class);
    }
}
