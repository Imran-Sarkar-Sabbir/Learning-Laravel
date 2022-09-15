<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $name = "Imran Sarkar Sabbir";
        $info = array(
            'name' => "Imran Sarkar Sabbir",
            "fav" => "Problem Solving",
            "profession" => "Software Engineer",
        );

        return view('user', compact('name', 'info'));
    }
}
