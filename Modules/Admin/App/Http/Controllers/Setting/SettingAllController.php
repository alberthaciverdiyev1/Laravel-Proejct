<?php

namespace Modules\Admin\App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin::home.index');
    }
}
