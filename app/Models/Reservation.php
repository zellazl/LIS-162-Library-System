<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Reservation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'facility', 'reservation_date', 'from', 'until'
    ];

    protected static function boot()
    {
        parent::boot(); 
    
        static::creating(function ($reservation) {
            if (empty($reservation->user_id)) {
                $reservation->user_id = Auth::id();
            }
        });
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}