<?php

namespace App\Http\Controllers\api\client;

use App\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\client\ExamsResource;

class ExamsController extends Controller
{
    public function index($matterId){
        // $student = Student::find($studentId);

        $homeworks = Exam::where('matter_id', $matterId)->paginate(5);
        
        ExamsResource::withoutWrapping();

        return new ExamsResource($homeworks);
    
    }
}
