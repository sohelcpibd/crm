<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="stocksproduct";
    protected $fillable=[
        'product_id','product_name','product_catagory','product_supplier','product_origin','image','product_size','product_color',
        'cost_price','sale_price',	'added_quantity',	'sold_quantity',	'return_quantity',	'damage_quantity',	'stock_quantity'
        

       
    ];
}
