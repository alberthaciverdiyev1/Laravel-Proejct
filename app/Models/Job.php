<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static function postJob($data)
    {
        DB::beginTransaction();
        try {
            DB::table('jobs')->insert($data);
            DB::commit();
            return response()->json(['status' => 200, 'message' => 'Job Created']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 404, 'message' => 'Job create failed']);
        }
    }

    public static function getAllJobs($filter, $limit = 20)
    {
        $jobs = DB::table('jobs')
            ->select(
                'jobs.id',
                'jobs.description',
                'categories.name as category_name',
                'subcategories.name as subcategory_name',
                'cities.name as city_name',
                'users.name as user_name',
                'users.surname as user_surname',
                'towns.name as town_name',
                DB::raw('TIMESTAMPDIFF(SECOND, jobs.created_at, NOW()) as minute_since_creation'),
                DB::raw('TIMESTAMPDIFF(SECOND, jobs.updated_at,NOW()) as minute_since_update')
            )
            ->leftJoin('categories', 'jobs.category_id', '=', 'categories.id')
            ->whereNull('categories.deleted_at')
            ->where('categories.is_active', '=', 1)
            ->leftJoin('categories as subcategories', 'jobs.subcategory_id', '=', 'subcategories.id')
            ->whereNotNull('subcategories.is_sub')
            ->whereNull('subcategories.deleted_at')
            ->where('subcategories.is_active', '=', 1)
            ->leftJoin('cities', 'jobs.city_id', '=', 'cities.id')
            ->whereNull('cities.deleted_at')
            ->where('cities.is_active', '=', 1)
            ->leftJoin('users', 'jobs.user_id', '=', 'users.id')
            ->whereNull('users.deleted_at')
            ->where('users.is_active', '=', 1)
            ->leftJoin('towns', 'jobs.town_id', '=', 'towns.id')
            ->whereNull('towns.deleted_at')
            ->where('towns.is_active', '=', 1)
            ->whereNull('jobs.deleted_at')
            ->where('jobs.is_active', '=', 1)
            ->where('is_service', '=', $filter)
            ->limit($limit)->orderBy('jobs.updated_at', 'desc')->get();
        if ($jobs->count() == 0) {
            return response()->json(['code' => 400, 'status' => 'warning', 'message' => 'Jobs not found'], 400);
        }
        return response()->json(['code' => 200, 'status' => 'success', 'message' => 'Jobs found', 'data' => $jobs], 200);

    }

    public static function jobDetails($id)
    {
        $job = DB::table('jobs')
            ->select(
                'jobs.id',
                'jobs.description',
                'categories.name as category_name',
                'subcategories.name as subcategory_name',
                'cities.name as city_name',
                'users.name as user_name',
                'users.surname as user_surname',
                'towns.name as town_name',
                DB::raw('TIMESTAMPDIFF(SECOND, jobs.created_at, NOW()) as minute_since_creation'),
                DB::raw('TIMESTAMPDIFF(SECOND, jobs.updated_at,NOW()) as minute_since_update')
            )
            ->leftJoin('categories', 'jobs.category_id', '=', 'categories.id')
            ->whereNull('categories.deleted_at')
            ->where('categories.is_active', '=', 1)
            ->leftJoin('categories as subcategories', 'jobs.subcategory_id', '=', 'subcategories.id')
            ->whereNotNull('subcategories.is_sub')
            ->whereNull('subcategories.deleted_at')
            ->where('subcategories.is_active', '=', 1)
            ->leftJoin('cities', 'jobs.city_id', '=', 'cities.id')
            ->whereNull('cities.deleted_at')
            ->where('cities.is_active', '=', 1)
            ->leftJoin('users', 'jobs.user_id', '=', 'users.id')
            ->whereNull('users.deleted_at')
            ->where('users.is_active', '=', 1)
            ->leftJoin('towns', 'jobs.town_id', '=', 'towns.id')
            ->whereNull('towns.deleted_at')
            ->where('towns.is_active', '=', 1)
            ->whereNull('jobs.deleted_at')
            ->where('jobs.id', '=', $id)
            ->where('jobs.is_active', '=', 1)->first();
        if (!$job) {
            return response()->json(['code' => 400, 'status' => 'warning', 'message' => 'Jobs not found'], 400);
        }
        return response()->json(['code' => 200, 'status' => 'success', 'message' => 'Jobs found', 'data' => $job], 200);

    }
}
