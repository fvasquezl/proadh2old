<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'car-list',
            'car-create',
            'car-edit',
            'car-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
