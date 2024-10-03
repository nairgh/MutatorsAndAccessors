<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function list(){
        return Student::all();
    }

    function save(){
        $student = new Student();
        $student->name='peter';
        $student->phone='3333';
        $student->age=23;
        if($student->save()){
            echo 'New Student saved';
        }
    }
}
