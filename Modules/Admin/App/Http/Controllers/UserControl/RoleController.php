<?php

namespace Modules\Admin\App\Http\Controllers\UserControl;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use \App\Models\Role as RoleModel;
use Spatie\Permission\Models\Role;
use \App\Models\Permission as PermissionModel;


class RoleController extends Controller
{
    public function index()
    {
        $rolesResponse = RoleModel::getAllRoles();
        $rolesData = json_decode($rolesResponse->getContent(), true);

        $roles = isset($rolesData['data']) ? $rolesData['data'] : [];

        return view('admin::roles.index', ['roles' => $roles]);
    }

    public function addIndex()
    {
        return view('admin::roles.add');
    }

    public function updateIndex($id)
    {
        if ($id) {
            $rolesData = RoleModel::getRoleById($id);
        }
        $rolesData = json_decode($rolesData->getContent(), true);
        $role = isset($rolesData['data']) ? $rolesData['data'] : [];

        return view('admin::roles.update', ['role' => $role]);
    }

    public function add(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required|string|unique:categories',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json(['status' => 400, 'message' => $errors]);
        }

        Role::create(['name' => $request->name]);

        return response()->json(['status' => 201, 'message' => 'Role created']);
    }

    public function assignPermissionIndex($id)
    {
        $permissions = PermissionModel::getAll();
        $role = RoleModel::getRoleById($id);

        $roleData = json_decode($role->getContent(), true);
        $rolePermissions = isset($roleData['data']) ? $roleData['data'] : [];

        $permissionsData = json_decode($permissions->getContent(), true);
        $allPermissions = isset($permissionsData['data']) ? $permissionsData['data'] : [];

        $data = [
            'role' => $rolePermissions,
            'permissions' => $allPermissions
        ];

        return view('admin::roles.assign_permission', compact('data'));
    }

    public function assignPermissions(Request $request, $id)
    {
        $request->only('permissions');
        $data = [
            'permissions' => $request->permissions,
            'id' => $id
        ];
        $res = RoleModel::assignPermission($data);

        return response()->json($res);
    }

    public function all()
    {
        $roles = RoleModel::getAllRoles();

        return response()->json($roles);
//        return Role::getAllRoles();
    }

    public function update(Request $request, $id)
    {
        $validator = validator($request->all(), [
            'name' => 'required|string',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json(['status' => 400, 'message' => $errors]);
        }
        $request->only('name');
        $res = RoleModel::updateRole($request, $id);
        return $res;
    }

    public function delete($id)
    {
        if ($id) {
            $res = RoleModel::deleteRole($id);
            return $res;
        }
        return response()->json(['status' => 400, 'message' => 'Id not found']);

    }
}
