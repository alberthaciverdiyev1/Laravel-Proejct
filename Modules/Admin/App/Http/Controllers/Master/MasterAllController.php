<?php

namespace Modules\Admin\App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master;

class MasterAllController extends Controller
{
    public function allView()
    {
        $data['status'] = 0;
        $masters = Master::getAll($data);
        $masters = isset($masters->original['data']) ? $masters->original['data'] : [];
        return view('admin::master.request', compact('masters'));
    }
}
