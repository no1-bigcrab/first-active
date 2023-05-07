<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
         protected $fillable = ['customer_id', 'user_id', 'name', 'address_1', 'phone', 'order_date'];

}
