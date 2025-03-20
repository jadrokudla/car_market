<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class exerController extends Controller
{
    public function index()
    {

        $target = 9;
        $nums = [2, 7, 11, 15];

        return view('htmlcss', compact('nums', 'target'));
    }
}
