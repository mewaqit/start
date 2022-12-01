<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function options()
    {
        return view('posts.options');
    }
}
