<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;
    protected $table='investor';
    protected $fillable= [
            'investor_name','contact_number','email_address','invest_amount','rate'
    ];
}
