<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(): BelongsTo
{
    return $this->belongsTo(User::class, 'user_id'); // Omit the second parameter if you're following convention
}

}
