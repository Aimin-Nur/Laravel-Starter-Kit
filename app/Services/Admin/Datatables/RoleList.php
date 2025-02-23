<?php

namespace App\Services\Admin\Datatables;

use Yajra\DataTables\DataTables;
use Spatie\Permission\Models\Role;

class RoleList
{
    public function getRolesData()
    {
        $roles = Role::all();

        return response()->json($roles);
    }
}
