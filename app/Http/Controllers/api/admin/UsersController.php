<?php

namespace App\Http\Controllers\api\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\admin\UsersResource;

class UsersController extends Controller
{
    public function index(){
        $users = User::where('role', '0')->get();

        return new UsersResource($users);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'lastsurname' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
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

    public function update(Request $request, $userId){
        $user = User::find($userId);

        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'lastsurname' => 'required|string',
            'email' => 'unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8'
        ]);

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->lastsurname = $request->input('lastsurname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->update();

        return response()->json([
            'message' => 'User successfully updated'
        ], 201);
    }

    public function destroy($userId){
        $user = User::find($userId);

        $user->delete();

        return response()->json([
            'message' => 'User successfully deleted'
        ], 201);
    }
}
