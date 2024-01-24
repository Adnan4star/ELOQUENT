<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;

class DepartmentController extends Controller
{
    //one-to-many

    // public function index()
    // {
    //     $data = Department::with('employee')->find(1); //calling model department with department function employee
    //         echo $data->name.'<br>';

    //     foreach ($data->employee as $item) {
    //         echo $item->name.'<br>';
    //         echo $item->phone.'<br>'.'<br>';
    //     }
    // }

    //one-to-many(Inverse)

    public function index()
    {
        $data = Employee::with('department')->find(3);
            echo $data->name. "<br>";
            echo $data->phone. "<br>";
            echo $data->department->name;
        
    }
}
