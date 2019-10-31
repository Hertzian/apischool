<?php

namespace App\Http\Controllers\api\client;

use App\Matter;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\client\MattersResource;

class MattersController extends Controller
{
    public function index($studentId){
        $student = Student::find($studentId);
        $matters = Matter::where('group_id', $student->group_id)->paginate(5);
        
        MattersResource::withoutWrapping();

        return new MattersResource($matters);
    
    }

}
