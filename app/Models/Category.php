<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['name', 'is_active', 'is_sub', 'parent_id', 'updater_id'];

    public static function allCategories()
    {
        $categories = DB::table('categories')->select('id', 'name', 'slug','created_at','is_active')->whereNull('deleted_at')->whereNull('is_sub')->get();
        if ($categories->count() == 0) {
            return response()->json(['status' => 'warning', 'message' => 'Categories not found'], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Categories found', 'data' => $categories], 200);
    }
    public static function allSubCategories()
    {
        $subcategories = DB::table('categories')->select('id', 'name', 'slug','created_at','is_active')->whereNotNull('is_sub')->whereNull('deleted_at')->get();
        if ($subcategories->count() == 0) {
            return response()->json(['status' => 'warning', 'message' => 'SubCategories not found'], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'SubCategories found', 'data' => $subcategories], 200);
    }

    public static function addCategory($data)
    {
        try {
            self::create([
                "name" => $data->name,
                "updater_id" => $data->updater_id
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Category added successfully'],
                201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while adding the category. Error: ' . $e->getMessage()],
                500);
        }

    }
}
