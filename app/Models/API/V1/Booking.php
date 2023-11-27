<?php

namespace App\Models\API\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'property_id',
        'dateini',
        'datefini',
        'total_days',
        'price_per_day',
        'price_for_stay',
        'cleaning_fee',
        'service_fee',
        'price_total',
        'status',
        'payment_method_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function property(){
        return $this->belongsTo(Property::class);
    }

    public static function boot(){
        parent::boot();
        static::creating(function ($property) {
            $property->user_id = Auth::id();
        });
    }

    public function PaymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
