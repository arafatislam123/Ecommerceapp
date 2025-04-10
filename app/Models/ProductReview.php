<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
   public function profile()
   {
       return $this->belongsTo(CustomerProfile::class,'customer_id');
   }
   protected $fillable=[
       'product_id',
       'customer_id',
       'rating',
       'description'
   ];
}
