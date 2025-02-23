<?php

namespace App\Services\Admin\Datatables;

use Spatie\Permission\Models\Permission;

class PermissionList
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getPermissionsData()
    {
        $permissions = Permission::with('roles')->get();

        $badgeClasses = [
            'bg-primary-subtle text-primary',
            'bg-info-subtle text-info',
            'bg-success-subtle text-success',
            'bg-warning-subtle text-warning',
            'bg-danger-subtle text-danger'
        ];

        $data = $permissions->map(function ($permission) use ($badgeClasses) {
            return [
                'id' => $permission->id,
                'name' => $permission->name,
                'assigned_to' => $permission->roles->map(function ($role, $index) use ($badgeClasses) {
                    $badgeClass = $badgeClasses[$index % count($badgeClasses)];
                    return '<span class="badge ' . $badgeClass . ' py-1 px-2 fs-11">' . $role->name . '</span>';
                })->implode(' '),
                'created_at' => $permission->created_at,
                'updated_at' => $permission->updated_at,
            ];
        });

        return response()->json([
            'data' => $data,
        ]);
    }
}
