<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Form_item extends Model
{
    protected $fillable = [
        'form_id',
        'type',
        'name',
        'label'
    ];

    public function froms():BelongsTo{
        return $this->belongsTo(Forms::class);
    }
}
