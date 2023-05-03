<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::select(Student::raw('count(*) as student_count,status'))
        ->groupBy('status')->get();
        return $students;
    }
}
