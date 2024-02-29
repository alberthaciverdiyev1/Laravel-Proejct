<?php

namespace Modules\Admin\App\Http\Controllers\Category;

use App\Http\Controllers\Controller;

//use http\Env\Request;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CategoryAddController extends Controller
{
    public function add()
    {
        return view('admin::category.add');
    }
    public function action(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required|string|unique:categories',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json(['status' => 400, 'message' => $errors]);
        }

        $res = Category::addCategory($request);
        return response()->json($res);
    }


}
