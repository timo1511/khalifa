<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['message', 'icon', 'link', 'cta', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}