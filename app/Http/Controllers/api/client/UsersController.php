<?php

namespace App\Http\Controllers\api\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\client\UserResource;

class UsersController extends Controller
{
    public function index(){
        $user = Auth::user();

        return new UserResource($user);
    }

    public function update(Request $request){
        $user = Auth::user();

        $request->validate([
            'email' => 'unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8'
        ]);

        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->update();

        return response()->json([
            'message' => 'User successfully updated'
        ], 201);
    }
}
