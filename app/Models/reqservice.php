<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class reqservice extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['id', 'created_at', 'updated_at', 'deleted_at', 'user_fullname', 'service_date', 'time_slot', 'service_name'];

    protected static function boot()
    {
        parent::boot(); 
    
        static::creating(function ($reqservice) {
            if (empty($reqservice->user_id)) {
                $reqservice->user_id = Auth::id();
            }
        });
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
