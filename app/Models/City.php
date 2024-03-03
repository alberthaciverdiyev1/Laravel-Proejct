<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name', 'is_active', 'updater_id'];

    public static function allCities(){
        $cities = DB::table('cities')->select('id','name')->whereNull('deleted_at')->where('is_active','=',1)->get();
        if ($cities->count() == 0) {
            return response()->json(['status' => 'warning', 'message' => 'Cities not found'], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Cities found', 'data' => $cities],200);
    }
}
