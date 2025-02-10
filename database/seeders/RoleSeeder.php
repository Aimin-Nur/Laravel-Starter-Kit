<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Buat role SuperAdmin dan Admin
        $superAdmin = Role::firstOrCreate(['name' => 'SuperAdmin']);
        $admin = Role::firstOrCreate(['name' => 'Admin']);

        // Buat permission
        $permissions = [
            'AdminPanel access',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Beri semua permission ke SuperAdmin
        $superAdmin->givePermissionTo(Permission::all());
        $admin->givePermissionTo('AdminPanel access');
    }
}
