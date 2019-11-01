<?php

namespace App\Http\Controllers\api;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'string'
        ]);


        $credentials = request([
            'email',
            'password'
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = $request->user();

        if ($user->role == '0') {
            $tokenResult = $user->createToken('Token Mamalon de USER');
            $token = $tokenResult->token;
            
            $user->access_token = $tokenResult->accessToken;
            $user->update();
            
            if ($request->remember_me) {
                $token->expires_at = Carbon::now()->addWeeks(1);
            }
            
            $token->save();
            
            return response()->json([
                'message' => 'User successfully loged in',
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult
                    ->token
                    ->expires_at
                    )
                    ->toDateTimeString(),
                ]);
        }

        $tokenResult = $user->createToken('Token Mamalon de ADMIN');
            $token = $tokenResult->token;
            
            $user->access_token = $tokenResult->accessToken;
            $user->update();
            
            if ($request->remember_me) {
                $token->expires_at = Carbon::now()->addWeeks(1);
            }
            
            $token->save();
            
            return response()->json([
                'message' => 'Admin successfully loged in',
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult
                    ->token
                    ->expires_at
                    )
                    ->toDateTimeString(),
                ]);
    }

    public function signup(Request $request){
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'lastsurname' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string||min:8|confirmed',
        ]);

        $user = new User([
            'name' => $request->name,
            'surname' => $request->surname,
            'lastsurname' => $request->lastsurname,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        return response()->json([
            'message' => 'User successfully created'
        ], 201);
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    // public function profile(Request $request){
    //     return response()->json($request->user());
    // }
}
