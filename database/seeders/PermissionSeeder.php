<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
                [
                    'title'=>'users_access'
                ],
                [
                    'title'=>'users_edit'
                ],
                [
                    'title'=>'users_delete'
                ],
                [
                    'title'=>'users_show'
                ],
                [
                    'title'=>'users_create'
                ],
                [
                    'title'=>'courses_access'
                ],
                [
                    'title'=>'courses_edit'
                ],
                [
                    'title'=>'courses_delete'
                ],
                [
                    'title'=>'courses_show'
                ],
                [
                    'title'=>'courses_create'
                ],
                [
                    'title'=>'groups_access'
                ],
                [
                    'title'=>'groups_edit'
                ],
                [
                    'title'=>'groups_delete'
                ],
                [
                    'title'=>'groups_show'
                ],
                [
                    'title'=>'groups_create'
                ],
                [
                    'title'=>'permissions_access'
                ],
                [
                    'title'=>'permissions_edit'
                ],
                [
                    'title'=>'permissions_delete'
                ],
                [
                    'title'=>'permissions_show'
                ],
                [
                    'title'=>'permissions_create'
                ],
                [
                    'title'=>'roles_access'
                ],
                [
                    'title'=>'roles_edit'
                ],
                [
                    'title'=>'roles_delete'
                ],
                [
                    'title'=>'roles_show'
                ],
                [
                    'title'=>'roles_create'
                ]
        ]);
    }
}
