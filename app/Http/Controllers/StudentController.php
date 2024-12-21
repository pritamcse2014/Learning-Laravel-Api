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
        // return $request->input();
        $student = new Student();
        $student->name = trim($request->name);
        $student->email = trim($request->email);
        $student->phone = trim($request->phone);
        if ($student->save()) {
            return ["result" => "Student Added Successfully."];
        } else {
            return ["result" => "Student Added Failed."];
        }
    }

    public function studentUpdate(Request $request) {
        $student = Student::find($request->id);
        $student->name = trim($request->name);
        $student->email = trim($request->email);
        $student->phone = trim($request->phone);
        if ($student->save()) {
            return ["result" => "Student Updated Successfully."];
        } else {
            return ["result" => "Student Updated Failed."];
        }
    }

    public function studentDelete($id) {
        $student = Student::destroy($id);
        if ($student) {
            return ["result" => "Student Deleted Successfully."];
        } else {
            return ["result" => "Student Deleted Failed."];
        }
    }
}
