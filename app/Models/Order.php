<?php

namespace App\Models;

use App\Services\GoogleSheet;
use Carbon\Carbon;
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


    public static function booted()
    {
        static::created(function($order) {
            $created_at = Carbon::parse($order->created_at)->timezone('Asia/Riyadh')->format('Y-m-d H:i:s');

            $googleSheet = new GoogleSheet();
            $values = [
                [
                    $created_at  ?? '-', $order->promoCode->code  ?? '-',
                    $order->email ?? '-', $order->name ?? '-', $order->cost ?? '-',
                    $order->payment_status ?? '-', $order->response_code ?? '-',
                    $order->reference_number  ?? '-'
                ],
            ];

            $googleSheet->saveDataToSheet($values);
        });

        static::updated(function($order) {
            $created_at = Carbon::parse($order->created_at)->timezone('Asia/Riyadh')->format('Y-m-d H:i:s');

            $googleSheet = new GoogleSheet();
            $values = [
                [
                    $created_at  ?? '-', $order->promoCode->code  ?? '-',
                    $order->email ?? '-', $order->name ?? '-', $order->cost ?? '-',
                    $order->payment_status ?? '-', $order->response_code ?? '-',
                    $order->reference_number  ?? '-'
                ],
            ];

            $googleSheet->saveDataToSheet($values);
        });
    }

}
