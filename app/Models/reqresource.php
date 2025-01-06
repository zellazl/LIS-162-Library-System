<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class reqresource extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['id', 'created_at', 'updated_at', 'deleted_at', 'user_fullname', 'user_email', 'claim_date', 'resource_title', 'resource_author', 'resource_accession_number'];

    protected static function boot()
    {
        parent::boot(); 
    
        static::creating(function ($reqresource) {
            if (empty($reqresource->user_id)) {
                $reqresource->user_id = Auth::id();
            }
        });
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
