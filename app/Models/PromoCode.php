<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;
    public $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class, 'promo_code_id');
    }

}