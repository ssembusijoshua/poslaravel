<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table ='transactions';
    protected $fillable = ['order_id','paid_amount','balance','payment_method', 'user_id','transac_date','transac_amaount'];
}
//`order_id`, `paid_amount`, `balance`, `payment_method`, `user_id`, `transac_date`, `transac_amaount`SELECT * FROM `transactions` WHERE 1