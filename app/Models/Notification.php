<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Notification extends Model
{
    protected $fillable = [
        'title'
    ];

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
