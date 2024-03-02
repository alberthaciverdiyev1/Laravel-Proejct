<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', "surname", "username", "phone"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function registerUser($data)
    {
        $user = self::create([
            "name" => $data->name,
            "surname" => $data->surname,
            "email" => $data->email,
            "username" => $data->username,
            "password" => $data->password
        ]);
        $userModel = User::find($user->id);
        $userModel->assignRole('user');
        if (!$user) {
            return response()->json(['status' => 404, 'message' => 'Register failed']);
        }
        return response()->json(['status' => 200, 'message' => 'Register success']);

    }

    public static function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:8'
        ]);
        $remember_me = $request->has('remember_me');
        $remember_me = true;
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
