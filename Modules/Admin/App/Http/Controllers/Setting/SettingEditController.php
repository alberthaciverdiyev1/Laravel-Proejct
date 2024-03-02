<?php

namespace Modules\Admin\App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingEditController extends Controller
{
    public function edit($id)
    {
        $setting = Setting::getSettingById($id);
        $setting = json_decode($setting->getContent(), false)->data;
        $setting = isset($setting) ? $setting : [];
        return view('admin::setting.edit', compact('setting'));
    }

    public function editAction(Request $request, $id)
    {
        if ($id) {
            $rules = [
                'value' => 'required',
                'key' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $messages = $validator->messages();
                return response()->json(['status' => 400, 'message' => $messages], 400);
            }

            $res = Setting::updateSetting($request,$id);
            return $res;

        }

    }
}
