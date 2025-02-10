<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Services\Admin\Datatables\RoleList;

class RoleController extends Controller
{
    protected $roleList;

    public function __construct(RoleList $roleList)
    {
        $this->roleList = $roleList;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        $permissions = Permission::all();
        return view('users.role.list', [
            'roles' => $roles,
            'permissions' => $permissions,
        ]);

    }

    public function getRolesData()
    {
        $roles = Role::select('name')->get();
        return response()->json($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);

        $role = Role::create(['name'=>$request->name]);

        $role->syncPermissions($request->permissions);

        // $flasher->addSuccess('Role Created', 'Dash UI');

        return view('users.role.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('admin.roles.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        if (Auth()->user()->hasRole($role->name) != $role->name & $role->name != 'SuperAdmin') {
            return view('admin.roles.edit', compact('role', 'permissions'));
        } else {
            // $flasher->addError('Not Allowed', 'Dash UI');
            return redirect(route('admin.roles.index'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update(['name'=>$request->name]);
        $role->syncPermissions($request->permissions);

        // $flasher->addInfo('Role "'.$role->name.'" Updated.', 'Dash UI');

        return redirect(route('admin.roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        // $flasher->addInfo('Role Deleted!', 'Dash UI');

        return redirect(route('admin.roles.index'));
    }
}
