<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reqservice extends Model
{
    protected $fillable = ['id', 'created_at', 'updated_at', 'deleted_at', 'time_slot', 'service_name'];
}
