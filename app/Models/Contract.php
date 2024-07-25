<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'salon_id', 'customer_name', 'event_date', 'contract_date',
        'customer_id', 'phone_1', 'phone_2', 'address', 'bride_groom',
        'guest_count', 'treats', 'services', 'extra_services', 'menu',
        'list_price', 'venue_price', 'food_price', 'extra_service_price',
        'subtotal', 'discount', 'discount_reason', 'total_amount',
        'payment', 'remaining_balance', 'details'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'menu' => 'array',
    ];

    /**
     * Get the salon that owns the contract.
     */
    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }
}
