<?php

namespace App\Http\Controllers\api\client;

use App\Matter;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\client\MattersResource;
use App\Http\Resources\client\StudentResource;
use App\Http\Resources\client\StudentsResource;

class StudentsController extends Controller
{
    public function index(){
        $user = Auth::user();
        $students = Student::where('user_id', $user->id)->paginate(5);

        return new StudentsResource($students);
    }

    public function show($studentId){
        $student = Student::find($studentId);

        return new StudentResource($student);
    }
}
