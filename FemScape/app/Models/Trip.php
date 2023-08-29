<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{

    use HasFactory;

    protected $fillable = [
        'place',
        'country',
        'description',
        'image',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
