<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $appends = ['cost'];

    public function promoCode()
    {
        return $this->hasOne(PromoCode::class, 'id', 'promo_code_id');
    }

    public function getCostAttribute()
    {
        return ($this->price/100);
    }

}
