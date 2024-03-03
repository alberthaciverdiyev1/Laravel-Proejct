<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Town extends Model
{
    use SoftDeletes;
    use HasFactory;
    public static function allTowns(){
        $towns = DB::table('towns')->select('id','name')->whereNull('deleted_at')->where('is_active','=',1)->get();
        if ($towns->count() == 0) {
            return response()->json(['status' => 'warning', 'message' => 'Towns not found'], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Towns found', 'data' => $towns],200);    }
}
