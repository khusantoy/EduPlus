<?php

namespace Database\Seeders;

use App\Models\GroupStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupStatus::insert([
            [
                'title' => 'Active'
            ],
            [
                'title' => 'Continues'
            ],
            [
                'title' => 'Paused'
            ]
        ]);
    }
}
