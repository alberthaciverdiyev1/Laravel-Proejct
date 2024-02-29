<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class Master extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['category_id', 'subcategory_id', 'city_id', 'town_id', 'email', 'FIN', 'phone', 'description', 'is_active', 'activated_date', 'updater_id','user_id'];

    public static function createMaster($data)
    {

        $res = self::create([
            "category_id" => $data->category_id,
            "subcategory_id" => $data->subcategory_id,
            "city_id" => $data->city_id,
            "town_id" => $data->town_id,
            "email" => $data->email,
            "FIN" => $data->FIN,
            "phone" => $data->phone,
            "description" => $data->description,
            "is_active" => $data->is_active,
            "updater_id" => $data->updater_id,
            "activated_date" => $data->actived_date,
            "user_id" => $data->user_id,
        ]);

        if (!$res) {
            return response()->json(['status' => 404, 'message' => 'Master create failed']);
        }
        return response()->json(['status' => 200, 'message' => 'Master Created']);

    }
}
