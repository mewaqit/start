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
//      $employees = employee::find(1)->projects;
//      $employees = employee::has('projects')->get();
//      dd($employees);
        $employees = employee::with('projects')->get();
        foreach ($employees as $employee)
        {
            foreach ($employee->projects as $project)
            {
                echo " <br />EID: ".$employee->emp_id . " &nbsp;&nbsp;&nbsp; PID: ".($project->prj_id ?? '');
            }
        }
    }
}
