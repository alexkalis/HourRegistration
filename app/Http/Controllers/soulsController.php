<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Souls;
// use Session;
use App\Http\Requests;

class soulsController extends Controller
{
    public function index() {
        $souls = Souls::all();
        $session = session('soul', 'default');
        return view('/souls/index', ['souls' => $souls]);
    }
    public function addToSession(Request $request, $id) {
        // die;
        $soul = Souls::find($id);
        // dd($soul);
        $request->session()->put('soul', $soul);
        return redirect()->back()->with('alert', 'het is toegevoegd ');
    }
}
