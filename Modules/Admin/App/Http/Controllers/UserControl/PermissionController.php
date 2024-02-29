<?php

namespace Modules\Admin\App\Http\Controllers\UserControl;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use \App\Models\Permission as PermissionModel;


class PermissionController extends Controller
{
    public function all()
    {
        $permissions = PermissionModel::getAll();
        $permissions = json_decode($permissions->getContent(), true);

        $permissions = isset($permissions['data']) ? $permissions['data'] : [];
        return view('admin::permission.all', ['permission' => $permissions]);
    }

    public function addIndex()
    {
        return view('admin::permission.add');
    }

    public function add(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json(['status' => 400, 'message' => $errors]);
        }
        Permission::create(['name' => $request->name]);
        return response()->json(['status' => 201, 'message' => 'Permisson Created']);
    }

    public function updateIndex($id)
    {
        $permission = PermissionModel::getPermissionById($id);
        $permission = json_decode($permission->getContent(), true);

        $permission = isset($permission['data']) ? $permission['data'] : [];
        return view('admin::permission.update', ['permission' => $permission]);
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
        $res = PermissionModel::updatePermission($request, $id);
        return response()->json($res);
    }

    public function delete($id)
    {
        if ($id) {
            $res = PermissionModel::deletePermission($id);
            return $res;
        }
        return response()->json(['status' => 400, 'message' => 'Id not found']);

    }
}
