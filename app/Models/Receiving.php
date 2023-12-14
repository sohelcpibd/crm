<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiving extends Model
{
    use HasFactory;
    protected $table="receiving";
    protected $fillable=['order_no','date','title','description','total','discount','received','due','payment_type']; 
}
