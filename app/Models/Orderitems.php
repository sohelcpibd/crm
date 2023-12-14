<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitems extends Model
{
    use HasFactory;
    protected $table='orderlists';

    protected $fillable =['order_no','product_name','unit_price','quantity','total'];
}
