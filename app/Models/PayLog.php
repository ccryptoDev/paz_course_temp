<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayLog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }
}
