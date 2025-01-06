<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reqservice extends Model
{
    protected $fillable = ['id', 'created_at', 'updated_at', 'deleted_at', 'user_fullname', 'service_date', 'time_slot', 'service_name'];
}
