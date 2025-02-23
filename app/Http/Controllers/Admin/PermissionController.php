<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Datatables\PermissionList;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::whereNotIn('name', ['SuperAdmin'])->get();
        $permissions = Permission::all();
        return view('users.pages-permission', compact('permissions', 'roles'));
    }

    public function getPermissionsData(PermissionList $permissionList)
    {
        return $permissionList->getPermissionsData();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getRoles = Role::get();
        return view('users.create-permission', compact('getRoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $input['name'] = Str::ucfirst($request->name);

        Permission::create($input);

        // // Log Create Permission
        // LogServices::logServices('create permission', 'Create New Permission', $input);

        session()->flash('success', 'Permission has been saved successfully!');

        return redirect(route('admin.permissions.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FlasherInterface $flasher)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $input['name'] = Str::ucfirst($request->name);

        Permission::findOrFail($id)->update($input);
        $flasher->addInfo('Permission "'.$request->name. '" Updated', 'Dash UI');
        return redirect(route('admin.permissions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission, FlasherInterface $flasher)
    {
        $permission->delete();
        $flasher->addWarning('Permission Deleted', 'Dash UI');
        return redirect(route('admin.permissions.index'));
    }
}
