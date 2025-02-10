<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $superAdmin = User::create([
            'name' => 'Muhaimin Nur',
            'email' => 'aiminnur02@gmail.com',
            'password'  => Hash::make('password'),
            'is_active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $admin = User::create([
            'name' => 'Admin DashUI',
            'email' => 'admin@dashui.dev',
            'password'  => Hash::make('password'),
            'is_active' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Pastikan Role Ada Sebelum Assign
        $superAdminRole = Role::where('name', 'SuperAdmin')->first();
        $adminRole = Role::where('name', 'Admin')->first();

        if ($superAdminRole) {
            $superAdmin->assignRole($superAdminRole->name);
        }

        if ($adminRole) {
            $admin->assignRole($adminRole->name);
        }
    }
}
