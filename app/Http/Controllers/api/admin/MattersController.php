<?php

namespace App\Http\Controllers\api\admin;

use App\Matter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\admin\MattersResource;

class MattersController extends Controller
{
    public function index(){
        $matters = Matter::paginate(5);

        return new MattersResource($matters);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'group_id' => 'required|string',
        ]);

        $student = new Matter([
            'title' => $request->title,
            'description' => $request->description,
            'group_id' => $request->group_id,
        ]);

        $student->save();

        return response()->json([
            'message' => 'Matter successfully created'
        ], 201);
    }

    public function update(Request $request, $matterId){
        $matter = Matter::find($matterId);

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'group_id' => 'required|string'
        ]);

        $matter->title = $request->input('title');
        $matter->description = $request->input('description');
        $matter->group_id = $request->input('group_id');
        $matter->update();

        return response()->json([
            'message' => 'Matter successfully updated'
        ]);
    }

    public function destroy($matterId){
        $matter = Matter::find($matterId);

        $matter->delete();

        return response()->json([
            'message' => 'Matter successfully deleted'
        ], 201);
    }
}
