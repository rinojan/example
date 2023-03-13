<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        return view('Pages.students.index');
    }

    public function store(Request $request){

        
    }
}
