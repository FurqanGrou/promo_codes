<?php

namespace App\Models;

use App\Notifications\SubscribeNotification;
use App\Services\GoogleSheet;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class Subscribe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public static function booted()
    {

    }
}
