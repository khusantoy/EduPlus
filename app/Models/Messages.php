<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'sender_id',
        'messagable_type',
        'messagable_id'

    ];


    public function messagable(): MorphTo
    {
        return $this->morphTo();
    }
}
