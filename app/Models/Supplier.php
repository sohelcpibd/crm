<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table='supplier';
    protected $fillable=[
        'supplier_name','contact_no','email_address','address','origin','contact_person'

    ];
}
