<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;
class Customer extends Model
{
    protected $fillable = [
        'customer_code','customer_name','billing_address','closing_date','payment'
        ,'account','price','approved'
    ];

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
