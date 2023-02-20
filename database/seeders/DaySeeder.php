<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::insert([
            [
                'name'=>'Dushanba'
            ],
            [
                'name'=>'Seshanba'
            ],
            [
                'name'=>'Chorshanba'
            ],
            [
                'name'=>'Payshanba'
            ],
            [
                'name'=>'Juma'
            ],
            [
                'name'=>'Shanba'
            ],
            [
                'name'=>'Yakshanba'
            ]
        ]);
    }
}
