<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roller extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'yetkinlikler' => 'array',
    ];
    protected $guarded = [];
}
