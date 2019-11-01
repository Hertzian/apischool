<?php

namespace App\Http\Controllers\api\admin;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\admin\StudentsResource;

class StudentsController extends Controller
{
    public function index(){
        $students = Student::all();

        return new StudentsResource($students);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'lastsurname' => 'required|string',
            'bloodtype' => 'required|string',
            'user_id' => 'required|string',
            'group_id' => 'required|string',
        ]);

        $student = new Student([
            'name' => $request->name,
            'surname' => $request->surname,
            'lastsurname' => $request->lastsurname,
            'bloodtype' => $request->bloodtype,
            'user_id' => $request->user_id,
            'group_id' => $request->group_id
        ]);

        $student->save();

        return response()->json([
            'message' => 'Student successfully created'
        ], 201);
    }

    public function update(Request $request, $studentId){
        $student = Student::find($studentId);

        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'lastsurname' => 'required|string',
            'bloodtype' => 'required|string',
            'user_id' => 'required|string',
            'group_id' => 'required|string',
        ]);

        $student->name = $request->input('name');
        $student->surname = $request->input('surname');
        $student->lastsurname = $request->input('lastsurname');
        $student->bloodtype = $request->input('bloodtype');
        $student->user_id = $request->input('user_id');
        $student->group_id = $request->input('group_id');
        $student->update();

        return response()->json([
            'message' => 'Student successfully updated'
        ], 201);
    }

    public function destroy($studentId){
        $user = Student::find($studentId);

        $user->delete();

        return response()->json([
            'message' => 'Student successfully deleted'
        ], 201);
    }
}
