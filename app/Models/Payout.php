<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    use HasFactory;
    protected $table="payments";
    protected $fillable=['order_no','date','title','description','total','discount','paid','due','payment_type']; 
}

