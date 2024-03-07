<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Master extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['category_id', 'subcategory_id', 'city_id', 'town_id', 'email', 'FIN', 'phone', 'description', 'is_active', 'activated_date', 'updater_id', 'user_id'];

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


    public static function getAll($data)
    {
        $status = $data['status'];
        $masters = DB::table('masters')->select(
            'masters.email',
            'masters.phone',
            'masters.created_at',
            'masters.is_active',
            'users.name',
            'users.surname',
            'users.username')
            ->whereNull('masters.deleted_at')
            ->where('masters.is_active', '=', $status)
            ->leftJoin('users', 'masters.user_id', '=', 'users.id')
            ->whereNull('users.deleted_at')
            ->where('users.is_active', '=', 1)->get();
        if ($masters->count() == 0) {
            return response()->json(['code' => 400, 'status' => 'warning', 'message' => 'Masters not found'], 400);
        }
        return response()->json(['code' => 200, 'status' => 'success', 'message' => 'Masters found', 'data' => $masters], 200);
    }

    public static function MasterDeatils($id)
    {
        $data = DB::table('masters')->select(
            'masters.email',
            'masters.phone',
            'users.name',
            'users.surname',
            'user.username',)
            ->whereNull('masters.deleted_at')
            ->where('is_active', '=', 0)
            ->where('id', '=', $id)
            ->leftJoin('users', 'master.user_id', '=', 'users.id')
            ->whereNull('users.deleted_at')
            ->where('is_active', '=', 1)
            ->leftJoin('categories', 'category_id', '=', 'masters.category_id')
            ->whereNull('categories.deleted_at')
            ->where('is_active', '=', 1)
            ->leftJoin('categories as subcategories', 'jobs.subcategory_id', '=', 'subcategories.id')
            ->whereNotNull('subcategories.is_sub')
            ->whereNull('subcategories.deleted_at')
            ->where('subcategories.is_active', '=', 1)
            ->leftJoin('cities', 'masters.city_id', '=', 'cities.id')
            ->whereNull('cities.deleted_at')
            ->where('cities.is_active', '=', 1)
            ->leftJoin('towns', 'masters.town_id', '=', 'towns.id')
            ->whereNull('towns.deleted_at')
            ->where('towns.is_active', '=', 1)->first();
        return $data;
    }

}
