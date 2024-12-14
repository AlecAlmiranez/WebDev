<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [
        'description',
        'created_at',
        'updated_at'
    ];

    protected $hidden =[
        'description',
        'created_at',
        'updated_at'
    ];
}