<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
        private $years = [
        '1' => 'First Year',
        '2' => 'Second Year',
        '3' => 'Third Year',
        '4' => 'Fourth Year',
        '5' => 'Fifth Year'
    ];
    // Show all students
    public function index(){
        return view('students.index',[
            'students' => Student::paginate(5)
        ]);
    }

    // Show single student
    public function show(Student $student){
        return view('students.show', [
            'student' => $student
        ]);
    }

    // Add a student
    public function create(){
        $programs = Program::getProgramsByCollege(1);
        $years = $this->years;
        return view('students.create', 
        [
            'programs' => $programs, 
            'years' => $years
        ]);
    }

    // Store Student Info
    public function store(Request $request){

        $formInputs = $request->validate([
            'studid' => 'required|regex:/[0-9]+/|unique:student,studid',
            'studfname' => 'required',
            'studlname' => 'required',
            'studprogram' => '',
            'studyear' => ''
        ]);

        Student::create($formInputs);

        return redirect('/index');
    }
       
        
    public function edit(Student $student){
        $programs = Program::getProgramsByCollege(1);
        $years = $this->years;
        return view('students.edit', 
        [
            'student' => $student,
            'programs' => $programs, 
            'years' => $years
            
        ]);
    } 

    public function update(Request $request, Student $student){
        $formInputs = $request->validate([
            'studfname' => 'required',
            'studlname' => 'required',
            'studprogram' => '',
            'studyear' => ''
        ]);

        $student->update($formInputs);

        return view('students.show', ['student' => $student]);
    }


    public function destroy(Student $student){

        $student->delete();
        return redirect('/index');
    }
}
