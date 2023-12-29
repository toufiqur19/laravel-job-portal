<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindJobController extends Controller
{
    public function findJob()
    {
        return view('front.findJob');
    }
}
