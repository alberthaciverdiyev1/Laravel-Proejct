<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role as SpatieRole;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Role extends Model
{
    use SoftDeletes, HasRoles;

    protected $fillable = ['id', 'name', 'deleted_at'];

    public static function getAllRoles()
    {
        $roles = DB::table('roles')->select('name', 'id')->whereNull('deleted_at')->get();
        if ($roles->count() == 0) {
            return response()->json(['status' => 'warning', 'message' => 'Roles not found'], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Roles found', 'data' => $roles], 200);
    }

    public static function getRoleById($id)
    {
        $role = DB::table('roles')->select('name', 'id')->where('id', '=', $id)->whereNull('deleted_at')->first();

        if ($role) {
            return response()->json(['status' => 'success', 'message' => 'Role found', 'data' => $role], 200);
        }

        return response()->json(['status' => 'warning', 'message' => 'Role not found'], 404);
    }

    public static function updateRole($data, $id)
    {
        $role = DB::table('roles')->select('name', 'id', 'is_active')->where('id', '=', $id)->whereNull('deleted_at')->first();
        if ($role) {
            $insert_data = [
                'name' => $data->name,
                'is_active' => $data->is_active ?? $role->is_active,
                'updater_id' => auth()->user()->id
            ];

            DB::table('roles')
                ->where('id', $id)
                ->whereNull('deleted_at')
                ->update($insert_data);
            return response()->json(['status' => 'success', 'message' => 'Role updated successfully'], 200);
        } else {
            return response()->json(['status' => 'warning', 'message' => 'Role not found'], 404);
        }

    }

    public static function deleteRole($id)
    {
        $role = DB::table('roles')->where('id', $id)->whereNull('deleted_at')->first();

        if ($role) {
            DB::table('roles')->where('id', $id)->update(['deleted_at' => now()]);

            return response()->json(['status' => 'success', 'message' => 'Role deleted successfully'], 200);
        } else {
            return response()->json(['status' => 'warning', 'message' => 'Role not found'], 404);
        }
    }


    public static function assignPermission($data)
    {
        try {
            DB::beginTransaction();
            $roleId = $data['id'];
            $permissionIds = $data['permissions'];
            $role = SpatieRole::find($roleId);
            if ($role) {
                if (is_array($permissionIds)) {
                    $permissions = SpatiePermission::whereIn('id', $permissionIds)->get();
                    $role->syncPermissions($permissions);
                    DB::commit();
                    return response()->json(['message' => 'Permissions assigned successfully'], 200);
                } else {
                    return response()->json(['error' => 'Invalid permission_ids format'], 400);
                }
            } else {
                return response()->json(['error' => 'Role not found'], 404);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}


