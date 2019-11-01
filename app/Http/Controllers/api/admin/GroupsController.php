<?php

namespace App\Http\Controllers\api\admin;

use App\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\admin\GroupsResource;

class GroupsController extends Controller
{
    public function index(){
        $groups = Group::paginate(5);

        return new GroupsResource($groups);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'grade' => 'required|string',
        ]);

        $student = new Group([
            'name' => $request->name,
            'grade' => $request->grade,
        ]);

        $student->save();

        return response()->json([
            'message' => 'Group successfully created'
        ], 201);
    }

    public function update(Request $request, $groupId){
        $group = Group::find($groupId);

        $request->validate([
            'name' => 'required|string',
            'grade' => 'required|string'
        ]);

        $group->name = $request->input('name');
        $group->grade = $request->input('grade');
        $group->update();

        return response()->json([
            'message' => 'Group successfully updated'
        ]);
    }

    public function destroy($groupId){
        $group = Group::find($groupId);

        $group->delete();

        return response()->json([
            'message' => 'Group successfully deleted'
        ], 201);
    }
}
