<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reqresource extends Model
{
    protected $fillable = ['id', 'created_at', 'updated_at', 'deleted_at', 'user_fullname', 'user_email', 'claim_date', 'resource_title', 'resource_author', 'resource_accession_number'];
}
