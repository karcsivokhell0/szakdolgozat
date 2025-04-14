<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Form_item extends Model
{
    protected $fillable = [
        'email',
        'type',
        'name',
        'error'
    ];

    public function users():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
