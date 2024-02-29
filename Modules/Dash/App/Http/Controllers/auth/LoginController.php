<?php

namespace Modules\Dash\App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
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
        return view('dash::auth/login');
    }

    public function login2(Request $request)
    {

        $data = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        $data = $request->only('username', 'password');
        $remember = $request->has('remember_me');
        $res = User::login($data, $remember);

        return response()->json($res);
    }

    public function logout2()
    {
        Auth::logout();
        return redirect('/');
    }
//    public function login(Request $request){
//        $loginUserData = $request->validate([
//            'username'=>'required|string',
//            'password'=>'required|min:8'
//        ]);
//        $user = User::where('username',$loginUserData['username'])->first();
//        if(!$user || !Hash::check($loginUserData['password'],$user->password)){
//            return response()->json([
//                'message' => 'Invalid Credentials'
//            ],401);
//        }
//        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
//        return response()->json([
//            'access_token' => $token,
//        ]);
//    }

    public function login(Request $request)
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
//        auth()->user()->tokens()->delete();
         auth()->logout();

        return response()->json([
            "message" => "logged out"
        ]);
    }

}
