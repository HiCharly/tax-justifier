<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkTrip extends Model
{
    /** @use HasFactory<\Database\Factories\WorkTripFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'vehicle_id',
        'home_address_id',
        'work_address_id',
        'date',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    /**
     * Get the user that owns the work trip.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the vehicle used for the work trip.
     */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    /**
     * Get the home address for the work trip.
     */
    public function homeAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'home_address_id');
    }

    /**
     * Get the work address for the work trip.
     */
    public function workAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'work_address_id');
    }
}
