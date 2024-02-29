<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name', 'is_active', 'updater_id'];

    public function allCities(){
        return City::all();
    }
}
