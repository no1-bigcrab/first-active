<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
         protected $fillable = ['name', 'address_1', 'address_2', 'country', 'state',  'zip_code', 'phone', 'email', 'password', 'status' ];

}
