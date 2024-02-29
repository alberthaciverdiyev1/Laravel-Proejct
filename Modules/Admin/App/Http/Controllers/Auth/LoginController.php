<?php

namespace Modules\Admin\App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

//use http\Env\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin::auth.login');
    }

//    public function action(Request $request)
//    {
//        $rules = array(
//            'username' => 'required',
//            'password' => 'required'
//        );
//        $validator = Validator::make($request->all(), $rules);
//
//        if ($validator->fails()) {
//            $messages = $validator->messages();
//            return response()->json(['status' => 200, 'message' => [$messages]]);
//        }
//        $res = Admin::login($request,$request->remember_me);
//        return response()->json($res);
//    }
    public function action(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(['status' => 400, 'message' => $messages], 400);
        }
        $res = User::login($request);

        return response()->json($res);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
