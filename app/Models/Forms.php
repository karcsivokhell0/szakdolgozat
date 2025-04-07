<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Forms extends Model
{
    protected $fillable=[
        'name',
        'action'
    ];

    public function items():HasMany{
        return $this->hasMany(Form_item::class);
    }
}
