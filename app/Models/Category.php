<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{   use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name','is_active','is_sub','parent_id','updater_id'];

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
