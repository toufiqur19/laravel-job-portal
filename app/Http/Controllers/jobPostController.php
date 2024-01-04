<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobPostController extends Controller
{
    public function jobPost()
    {
        return view('front.jobPost');
    }
}
