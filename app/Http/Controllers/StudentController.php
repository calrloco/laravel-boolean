<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function __construct(){
        $this->getStudents();
    }
    
    public function getStudents(){
        $this->students = config('students');
    }

    public function studenti(){
        $data = $this->students;
        return view('studenti',compact('data'));
    }
    public function showStudent($id){
       if(!array_key_exists($id,$this->students)){
            abort(404);    
       }
       $student = $this->students[$id];
       return view('Studente',compact('student'));
    }
}
