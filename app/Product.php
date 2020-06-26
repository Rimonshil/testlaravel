<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','size','color','quantity','price','supplyer_id','user_id','purchase_id'
    ];

    public function supplyer()
    {
        return $this-> belongsTo(Supplyer::class);
    }
}
