<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'course_id',
        'room_id',
        'status',
        'start',
        'finish',
        'days'
    ];
    public function course() {
        return $this -> belongsTo(Course::class);
    }
    public function room() {
        return $this -> belongsTo(Room::class);
    }
    public function days()
    {
        return $this -> belongsToMany(Day::class, 'day_group');
    }
}
