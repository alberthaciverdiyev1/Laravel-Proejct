<?php

namespace Modules\Dash\App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class RegisterController extends Controller
{
    public function index()
    {
        return view('dash::auth/register');
    }

    public function register(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'string',
                'min:4',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'confirm_password' => 'required|same:password'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(['status' => 200, 'message' => [$messages]]);
        }
        $request["password"] = Hash::make($request->password);

        $res = User::registerUser($request);

        return response()->json($res);
    }

}
