<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoiceProduct extends Model
{
    use HasFactory;
    protected $fillable=[
        'invoice_id',
        'product_id',
        'qty',
        'sale_price',
        'user_id'
    ];
    public function product()
    {
        return $this->belongTo(Product::class);
    }
}
