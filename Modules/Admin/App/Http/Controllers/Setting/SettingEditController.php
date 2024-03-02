<?php

namespace Modules\Admin\App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;

class SettingAllController extends Controller
{
    public function index()
    {
        return view('admin::home.index');
    }
}
