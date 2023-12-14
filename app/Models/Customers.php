<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table='customers';

    protected $fillable=[
        'customer_name','contact_no','email','address','contact_person','origin'
        
    ];
}
