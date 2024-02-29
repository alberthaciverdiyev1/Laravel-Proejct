<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title','description','publish_start_date','publish_end_date','is_active'];

    public function list()
    {
        return Blog::select('id', 'title', 'description','created_at','publish_start_date')->get();
    }

    public static function addBlog($data)
    {
         self::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Blog added successfully',
        ], 200);
    }
}
