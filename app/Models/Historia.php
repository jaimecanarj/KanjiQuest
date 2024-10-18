<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
