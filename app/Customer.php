<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;
class Customer extends Model
{
	protected $casts = [
	    'street_address' => 'array',
	];

    protected $fillable = [
        'customer_code','customer_name','street_address','postal_code','phone_number','fax_number','billing_name'
        ,'closing_date','payment'
        ,'account','price','approved'
    ];

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
