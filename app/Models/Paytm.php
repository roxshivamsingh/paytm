<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paytm extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'order_id', 'price', 'transaction_id', 'status', 'updated_at'];
}
