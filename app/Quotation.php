<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable =[
     'biller', 'product_id','supplyer_id','date'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function supplyer() {
        return $this->belongsTo(Supplyer::class);
    }

   
}
