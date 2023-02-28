<?php

namespace Database\Seeders;

use App\Models\Staffs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staffs::insert([
            [
                'name' => 'Alisher',
                'surname' => 'Alisherov',
                'role_id' => 3,
                'status' => 'Foiz',
                'salary' => '1000000',
                'phone_number'=>'992340716',
                'image' => 'alisher_pic.jpg'
            ]
        ]);
    }
}
