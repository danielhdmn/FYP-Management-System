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

            return redirect('students');
        }

        else{
            return redirect('studentslist');
        }

        //dd(Auth::user());

    }



}
