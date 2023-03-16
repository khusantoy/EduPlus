<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Staffs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'salary',
        'phone_number',
        'image',
        'status_id'
    ];
    public function role()
    {
        return $this->belongsToMany(Role::class,'role_staffs');
    }

    public function messages(): MorphMany
    {
        return $this->morphMany(Messages::class, 'messagable');
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
