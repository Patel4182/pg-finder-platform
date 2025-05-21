<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'price',
        'location',
        'room_size',
        'available_from',
        'description',
        'amenities',
        'images',
        'is_available',
    ];

    protected $casts = [
        'available_from' => 'date',
        'amenities' => 'array',
        'images' => 'array',
        'is_available' => 'boolean',
    ];

    /**
     * Get the user that owns the listing.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
