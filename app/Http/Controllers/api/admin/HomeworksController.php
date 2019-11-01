<?php

namespace App\Http\Controllers\api\admin;

use App\Homework;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\admin\HomeworksResource;

class HomeworksController extends Controller
{
    public function index(){
        $homeworks = Homework::paginate(5);

        return new HomeworksResource($homeworks);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'matter_id' => 'required|string',
        ]);

        $student = new Homework([
            'title' => $request->title,
            'description' => $request->description,
            'matter_id' => $request->matter_id,
        ]);

        $student->save();

        return response()->json([
            'message' => 'Homework successfully created'
        ], 201);
    }

    public function update(Request $request, $homeworkId){
        $homework = Homework::find($homeworkId);

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'matter_id' => 'required|string'
        ]);

        $homework->title = $request->input('title');
        $homework->description = $request->input('description');
        $homework->matter_id = $request->input('matter_id');
        $homework->update();

        return response()->json([
            'message' => 'Homework successfully updated'
        ]);
    }

    public function destroy($homeworkId){
        $homework = Homework::find($homeworkId);

        $homework->delete();

        return response()->json([
            'message' => 'Homework successfully deleted'
        ], 201);
    }
}
