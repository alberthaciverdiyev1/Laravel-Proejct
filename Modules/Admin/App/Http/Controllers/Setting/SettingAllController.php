<?php

namespace Modules\Admin\App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use http\Env\Request;

class SettingAllController extends Controller
{
    public function all()
    {
        $setting = Setting::allSettings();
        $settings = json_decode($setting->getContent(), false)->data;
        $settings = isset($settings) ? $settings : [];
        return view('admin::setting.all', compact('settings'));
    }


}
