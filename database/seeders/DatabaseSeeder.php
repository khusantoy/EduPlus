<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\Day;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $this->call([
//           RoleSeeder::class,
//           PermissionSeeder::class,
//          PermissionRoleSeeder::class,
//          CourseSeeder::class,
//          RoomSeeder::class,
//           DaySeeder::class
//            GroupSeeder::class
            StaffsSeeder::class
     ]);
    }
}
