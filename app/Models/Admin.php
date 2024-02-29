<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasRoles;


    protected $fillable = ['name','email', 'password', "surname", "username", "phone", "is_active", "is_blocked"];


    public static function login2($data, $remember_me)
    {
        $credentials = $data->only('username', 'password');
        if (Auth::attempt($credentials, $remember_me)) {
            return response()->json(['status' => 'success', 'message' => 'Login successful', 'data' => $data]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid credentials'], 401);
        }
    }

//    public static function login(Request $request,$remember_me)
//    {
//        $loginUserData = $request->validate([
//            'username' => 'required|string',
//            'password' => 'required|min:8'
//        ]);
//        $user = Admin::where('username', $loginUserData['username'])->first();
//        if (!$user || !Hash::check($loginUserData['password'], $user->password)) {
//            return response()->json([
//                'message' => 'Invalid Credentials'
//            ], 401);
//        }
//        $token = $user->createToken($user->name . '-AuthToken')->plainTextToken;
//        return response()->json([
//            'access_token' => $token,
//        ]);
//    }
    public static function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:8'
        ]);
        $remember_me = $request->has('remember_me');

        if (Auth::attempt($credentials, $remember_me)) {
            $user = Auth::user();
            $token = $user->createToken($user->name . '-AuthToken');
            return response()->json([
                'access_token' => $token->plainTextToken,
            ]);
        }

        return response()->json([
            'message' => 'Invalid Credentials'
        ], 401);
    }

}
