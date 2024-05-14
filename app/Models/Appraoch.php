<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appraoch extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'order_number',
        'author_id'
    ];
}
