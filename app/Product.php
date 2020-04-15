<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    protected $primaryKey = 'product_id';

    protected $fillable = 
    [
            'category_id',     
            'product_name',     
            'product_price',    
            'product_stock',     
            'explanation',       
            'status'           
    ];

    public $timestamps = false;
}
