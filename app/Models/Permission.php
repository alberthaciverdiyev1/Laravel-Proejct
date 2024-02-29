<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Permission extends Model
{
    use SoftDeletes;

    protected $fillable = ['id', 'name', 'deleted_at'];

    public static function getAll()
    {
        $permissions = DB::table('permissions')->select('id', 'name')->whereNull('deleted_at')->get();
        if ($permissions->count() == 0) {
            return response()->json(['status' => 'warning', 'message' => 'Permission not found'], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Permission found', 'data' => $permissions], 200);
    }

    public static function getPermissionById($id)
    {
        $permission = DB::table('permissions')->select('id', 'name')->where('id','=',$id)->whereNull('deleted_at')->first();
        if (!$permission) {
            return response()->json(['status' => 'warning', 'message' => 'Permission not found'], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Permission found', 'data' => $permission], 200);
    }

    public static function updatePermission($data,$id)
    {
        $permission = DB::table('permissions')->select('name', 'id','is_active')->where('id', '=', $id)->whereNull('deleted_at')->first();
        if ($permission){
            $insert_data = [
                'name' => $data->name,
                'is_active' => $data->is_active ?? $permission->is_active,
                'updater_id' => auth()->user()->id
            ];

            DB::table('permissions')
                ->where('id', $id)
                ->whereNull('deleted_at')
                ->update($insert_data);
            return response()->json(['status' => 'success', 'message' => 'Permission updated successfully'], 200);
        }else{
            return response()->json(['status' => 'warning', 'message' => 'Permission not found'], 404);
        }
    }

    public static function deletePermission($id)
    {
        try {
            $permission = Permission::where('id', $id)->whereNull('deleted_at')->firstOrFail();
            $permission->delete();
            return response()->json(['status' => 'success', 'message' => 'Permission deleted successfully'], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['status' => 'warning', 'message' => 'Permission not found'], 404);
        }
    }
}


