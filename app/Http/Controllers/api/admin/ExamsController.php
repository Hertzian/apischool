<?php

namespace App\Http\Controllers\api\admin;

use App\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\admin\ExamsResource;

class ExamsController extends Controller
{
    public function index(){
        $exams = Exam::all();

        return new ExamsResource($exams);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'matter_id' => 'required|string',
        ]);

        $student = new Exam([
            'title' => $request->title,
            'description' => $request->description,
            'matter_id' => $request->matter_id,
        ]);

        $student->save();

        return response()->json([
            'message' => 'Exam successfully created'
        ], 201);
    }

    public function update(Request $request, $examId){
        $exam = Exam::find($examId);

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'matter_id' => 'required|string'
        ]);

        $exam->title = $request->input('title');
        $exam->description = $request->input('description');
        $exam->matter_id = $request->input('matter_id');
        $exam->update();

        return response()->json([
            'message' => 'Exam successfully updated'
        ]);
    }

    public function destroy($examId){
        $exam = Exam::find($examId);

        $exam->delete();

        return response()->json([
            'message' => 'Exam successfully deleted'
        ], 201);
    }
}
