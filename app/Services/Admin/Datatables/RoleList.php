<?php

namespace App\Services\Admin\Datatables;

use Yajra\DataTables\DataTables;
use Spatie\Permission\Models\Role;

class RoleList
{
    public function getRolesData()
    {
       $roles = Role::all(); // Ambil data dari Role, atau bisa disesuaikan dengan query lainnya

    // Format data sesuai yang dibutuhkan oleh grid.js
    $data = $roles->map(function ($role) {
        return [
            $role->id,
            $role->name,
            $role->users()->count(),
            $role->is_active ? 'Active' : 'Inactive',
            '<a href="' . route('admin.roles.edit', $role->id) . '" class="btn btn-warning btn-sm">Edit</a>',
        ];
    });

    return response()->json([
        'data' => $data,
    ]);
    }
}
