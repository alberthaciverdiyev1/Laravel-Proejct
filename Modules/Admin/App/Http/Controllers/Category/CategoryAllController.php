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

class CategoryAllController extends Controller
{
    public function all()
    {
        $categories = Category::allCategories();
        $categories = json_decode($categories->getContent(), false)->data;
        $categories = isset($categories) ? $categories : [];
        return view('admin::category.all', compact('categories'));
    }


}
