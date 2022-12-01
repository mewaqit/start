<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//use \Barryvdh\Debugbar\Facades\Debugbar;

class UserController extends Controller
{
    public function index()
    {
        //Debugbar::info(User::find(1)->projects);
        var_dump(User::find(1)->projects);
    }
}
