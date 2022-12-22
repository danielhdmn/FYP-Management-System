<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Lecturer;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class lecturerControl extends Controller
{
    // DISPLAY STUDENTS LIST

    function display(){
        $data=Student::all();

        return view('lecturers.studentList', ['student'=>$data]);
    }


    //DISPLAY EXAMINEE LIST

    function displayExaminee(){
        $lecturer_id=Auth::user()->id;

        $data=Project::where('examiner_1', '=' , $lecturer_id)->orWhere('examiner_2', '=', $lecturer_id)->get();
        $student=Student::all();
        $project=Project::all();

        return view('lecturers.examineeList', [
            'examinee'=>$data,
            'student'=>$student,
            'project'=>$project,
        ]);
    }


    //DISPLAY SUPERVISEE

    function displaySupervisee(){
        $lecturer_id=Auth::user()->id;

        $data=Project::where('supervisor', '=' , $lecturer_id)->get();
        $student=Student::all();
        $project=Project::all();

        return view('lecturers.supervisee', [
            'supervisee'=>$data,
            'student'=>$student,
            'project'=>$project,
        ]);
    }

 
    function updateSupervisee($id){

        $data=Project::where('project_id', '=' , $id)->get();

        return view('lecturers.updateSupervisee', ['supervisee'=>$data]);
    }


    //UPDATE SUPERVISEE

    function updateSV(Request $req){

        DB::update('update projects set start_date = ?, end_date = ?, duration = ?, progress = ?, status = ? where project_id = ?', [$req->start_date, $req->end_date, $req->duration, $req->progress, $req->status, $req->project_id]);

        return redirect('superviseelist');
    }






}
