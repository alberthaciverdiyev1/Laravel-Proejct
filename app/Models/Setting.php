<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Setting extends Model
{
    use SoftDeletes;

    public static function allSettings()
    {
        $settings = DB::table('settings')->select('id', 'key', 'value')->whereNull('deleted_at')->where('is_active', '=', '1')->get();
        if ($settings) {
            return response()->json(['message' => 'Roles found', 'data' => $settings], 200);
        }
        return response()->json(['message' => 'Roles not found', 'data' => []], 400);

    }

    public static function getSettingById($id)
    {
        $setting = DB::table('settings')->select('id', 'key', 'value')->whereNull('deleted_at')->where('id', '=', $id)->first();
        if ($setting) {
            return response()->json(['message' => 'Roles found', 'data' => $setting], 200);
        }
        return response()->json(['message' => 'Roles not found', 'data' => []], 400);
    }

    public static function updateSetting($data, $id)
    {
        $setting = DB::table('settings')->select('id', 'key', 'value', 'is_active')->whereNull('deleted_at')->where('id', '=', $id)->first();
        if ($setting) {
            $insert_data = [
                'key' => $data->key,
                'value' => $data->value,
                'is_active' => $data->is_active ?? $setting->is_active,
            ];
            DB::table('settings')
                ->where('id', $id)
                ->whereNull('deleted_at')
                ->update($insert_data);
            return response()->json(['status' => 'success', 'message' => 'Setting updated successfully'], 200);
        }
        return response()->json([
            'message' => 'Setting not found',
            'data' => []
        ], 400);

    }

}
