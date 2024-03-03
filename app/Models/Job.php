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
}
