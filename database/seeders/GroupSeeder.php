<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::insert([
            [
                'name'=>'Team2',
                'course_id'=>2,
                'room_id'=>2,
                'status'=>'Active',
                'start'=>'13:30',
                'finish'=>'15:00',
            ]
        ]);
    }
}
