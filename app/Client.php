<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;
class Client extends Model
{
	protected $fillable = [
        'name','email','phone','gender','address','city','pincode'
    ];
    // public function invoices()
    // {
    //     return $this->hasManyThrough('App\Invoice','App\Product','client_id','id');
    // }
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
