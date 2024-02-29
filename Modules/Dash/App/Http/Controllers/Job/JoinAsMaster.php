<?php

namespace Modules\Dash\App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Master;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JoinAsMaster extends Controller
{
    function __construct()
    {
        $this->middleware('CheckUserAccess');
    }

    public function index()
    {
        return view('dash::Job.index');
    }

    public function action(Request $request)
    {
        $rules = array(
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'city_id' => 'required',
            'town_id' => 'required',
            'email' => 'required|email',
            'FIN' => 'required|min:7|max:7|unique:masters',
            'phone' => 'required|numeric',
            'description' => 'max:500',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(['status' => 200, 'message' => [$messages]]);
        }
        $request['user_id'] = Auth::user()->id;
        $request['is_active'] = 0;
        $res = Master::createMaster($request);
        return \response()->json($res);
    }
}
