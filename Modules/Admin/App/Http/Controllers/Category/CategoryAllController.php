<?php

namespace Modules\Admin\App\Http\Controllers\Category;

use App\Http\Controllers\Controller;

//use http\Env\Request;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CategoryAllController extends Controller
{
    public function all()
    {
        return view('admin::category.all');
    }


}
