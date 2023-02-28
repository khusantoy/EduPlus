<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'role_id',
        'status',
        'salary',
        'phone_number',
        'image',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
