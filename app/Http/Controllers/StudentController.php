<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentList() {
        // return "Student List";
        return Student::all();
    }

    public function studentAdd(Request $request) {
        return $request->input();
    }
}
