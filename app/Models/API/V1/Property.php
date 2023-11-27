<?php

namespace App\Models\API\V1;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'property_type_id',
        'room_type_id',
        'category_id',
        'subcategory_id',
        'country_id',
        'state_id',
        'city_id',
        'address',
        'latitude',
        'longitude',
        'accommodate_count',
        'bedroom_count',
        'bed_count',
        'bathroom_count',
        'currency_id',
        'price',
        'cover',
        'property_images[]',
        'refund_type',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getPublishedAtAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function property_type(){
        return $this->belongsTo(PropertyType::class);
    }

    public function room_type(){
        return $this->belongsTo(RoomType::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function PropertyImage(){
        return $this->hasMany(PropertyImage::class);
    }

    public static function boot(){
        parent::boot();
        static::creating(function ($property) {
            $property->user_id = Auth::id();
        });
    }
}
