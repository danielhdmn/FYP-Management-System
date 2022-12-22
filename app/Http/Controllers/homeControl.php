<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use App\Models\Student; 

class homeControl extends Controller
{
    function index(){
        return view('home');
    }

    function redirectFunct(){
        $typeuser=Auth::user()->usertype;

        if($typeuser == '1'){
            $student=Student::all();

            return view('admin.students', ['student'=>$student]);
        }

        else{
            return view('lecturers.lecturerpage');
        }

        dd(Auth::user());

    }



}
