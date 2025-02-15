<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'company',
        'user_id', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    
}
