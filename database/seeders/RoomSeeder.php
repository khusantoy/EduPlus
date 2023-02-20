<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::insert([
            [
                'title' => 'Linux',
                'room_number' => 1
            ],
            [
                'title' => 'Telegram',
                'room_number' => 2
            ],
            [
                'title' => 'Facebook',
                'room_number' => 3
            ],
            [
                'title' => 'Google',
                'room_number' => 4
            ],
            [
                'title' => 'Gamers',
                'room_number' => 5
            ]
        ]);
    }
}
