<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\project;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = employee::all();
        foreach ($employees as $employee)
        {
            echo $employee->emp_id ." ". $employee->emp_name . " <br />";
        }

    }

    public function show_projects()
    {
//        $employees = employee::find(1)->projects;
//        $employees = employee::with('projects')->get();
        $employees = project::with('employees')->get();
        foreach ($employees as $employee)
        {
            echo " <br />ID: ".$employee->emp_id ." <br />NAME: ". $employee->emp_name ." <br />Project: ". $employee->prj_title . " <br />";
        }
    }
}
