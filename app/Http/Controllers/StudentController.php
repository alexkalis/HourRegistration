<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schools;
use App\Students;
use App\User;

class SchoolController extends Controller
{
    public function schools() {
        $schools = Schools::all();
        // $students = Students::all();
        // $students->userStudent;
        return view('/schools', ['schools' => $schools]);
    }
    public function edit($id) {
        $school = Schools::find($id);
        return view('school/edit', ['school' => $school]);
    }
    public function update
}
