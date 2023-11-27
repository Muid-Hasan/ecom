<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'discount',
        'vat',      
        'payable',
        'cus-details',
        'ship-details', 
        'shipping-method',
        'tran_id',
        'delivery_status',
        'payment_status',
        'user_id'
    ] ;
}
