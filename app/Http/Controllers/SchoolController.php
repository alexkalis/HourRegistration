<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schools;
use App\Students;
use App\User;

class schoolController extends Controller
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
    public function update(Request $request, $id) {
        $request->validate([
            'school' => 'required',
            'place' => 'required',
            'address' => 'required'
        ]);
        $school = Schools::find($id);
        $school->school =   $request->input('school');
        $school->place =   $request->input('place');
        $school->address =   $request->input('address');
        $school->save();
        return redirect('/schools');
    }
    public function delete($id) {
        $school = Schools::find($id);
        $school->delete();
        return redirect('/schools');
    }
    public function create() {
        return view('/school/create');
    }
    public function store(Request $request) {
        $request->validate([
            'school' => 'required',
            'place' => 'required',
            'address' => 'required'
        ]);
        $school = new Schools;
        $school->school =   $request->input('school');
        $school->place =   $request->input('place');
        $school->address =   $request->input('address');
        $school->save();
        return redirect('/school/index');

    }
}
