<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplyer extends Model
{
    protected $fillable = [
        'name','address', 'contact','balance','paid_balance'
    ];
    public function product() 
    {
        return $this->hasMany(Product::class);
    }
}
