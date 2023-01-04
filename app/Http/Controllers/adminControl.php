<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Lecturer;
use App\Models\Project;


class adminControl extends Controller
{

    function displayStudent(){
        $data=Student::all();

        return view('admin.students', ['student'=>$data]);
    }

    function displayLecturer(){
        $data=Lecturer::all();

        return view('admin.lecturers', ['lecturer'=>$data]);
    }

    function create(){
        $studentList=Project::select('student_id')->get()->toArray();
        $studentList=Student::whereNotIn('student_id', $studentList)->get();

        $lecturerList=Lecturer::all();

        return view('admin.create', [
            'student'=>$studentList, 
            'lecturer'=>$lecturerList, 
        ]);

    }

    function createProject(Request $req){
        $project = new Project;

        $project->type = $req->type;
        $project->title = $req->title;
        $project->student_id = $req->student_name;
        $project->supervisor = $req->supervisor;
        $project->examiner_1 = $req->examiner_1;
        $project->examiner_2 = $req->examiner_2;
        
        $project->save();

        return redirect('creates');
    }

    function displayProject(){
        $data=Project::all();
        $studentList=Student::all();
        $lecturerList=Lecturer::all();

        
        return view('admin.projectlist', [
            'project'=>$data,
            'student'=>$studentList, 
            'lecturer'=>$lecturerList, 
        ]);
    }

}
