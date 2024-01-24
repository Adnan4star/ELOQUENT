<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentProfile;
use Symfony\Component\HttpKernel\Profiler\Profile;

class StudentController extends Controller
{
    //one to one (hasOne)
    // public function index()
    // {
    //     $single = Student::with('Profile')->find(1); //Checking if our created relation between models work with student profile function data
    //     echo $single->name."<br>";
    //     echo $single->email."<br>";
    //     echo $single->profile->country; //fetching profile from student where we created relation with studentprofile in student
    // }

    //one to one inverse(belongsTo)
    public function index()
    {
        $single = StudentProfile::with('student')->find(2); //fetching data from secondary table studentProfile with student function data
        echo $single->student->name."<br>";
        echo $single->student->email."<br>";
        echo $single->country;
    }
}
