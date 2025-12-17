<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription extends Model
{
    use HasFactory;
    protected $casts =[
        'is_active' => 'boolean'
    ];

    protected $attributes = [
        'is_active' => 'true'
    ];

    public function scopeActive($query){
        return $query->where('is_active', true);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
