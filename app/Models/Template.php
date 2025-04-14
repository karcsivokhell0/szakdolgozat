<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Template extends Model
{
    protected $fillable =[
        "HeaderTitle",
        "BodyTitle",
        "BodyDescription",
        "SeconDescription",
        "image",
        "bgColor"
    ];

    public function users():BelongsTo{
        return $this->belongTo(User::class);
    }
}
