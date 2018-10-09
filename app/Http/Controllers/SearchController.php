<?php

namespace App\Http\Controllers;

use App\User;
use App\HourRegistration;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SearchController extends Controller
{
    public function searchIndex() {

        return view('/search');
    }
    public function search(Request $request) {
        $hours = HourRegistration::where('date','like')->get();
        return redirect()->back();
    }
}
