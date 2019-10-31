<?php

namespace App\Http\Controllers\api\client;

use App\Matter;
use App\Student;
use App\Homework;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\client\HomeworksResource;

class HomeworksController extends Controller
{
    public function index($matterId){
        // $student = Student::find($studentId);

        $homeworks = Homework::where('matter_id', $matterId)->paginate(5);
        
        HomeworksResource::withoutWrapping();

        return new HomeworksResource($homeworks);
    
    }
}
