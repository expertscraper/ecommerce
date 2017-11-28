<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;
class Product extends Model
{
    protected $fillable = [
        'invoice_id', 'product_code', 'product_name',
        'description','price','qty','total'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
