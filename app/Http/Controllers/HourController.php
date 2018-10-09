<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HourRegistration;
use App\User;
use Auth;
class HourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours = HourRegistration::orderBy('created_at', 'asc')->paginate(10);
        $user = Auth::user();
        $allHours = HourRegistration::sum('hours');
        $total = $allHours * 4.56;
        return view('/hour', ['hours' => $hours, 'count' => $count, 'total' => $total, 'user' => $user]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('HourRegistration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
      $user = Auth::user();
        $request->validate([
            'day' => 'required',
            'hours' => 'required',
            'date' => 'required',
            'beginTime' =>'required',
            'endTime' => 'required'
        ]);
        $post = new HourRegistration;
        $post->day = $request->input('day');
        $post->hours = $request->input('hours');
        $post->date = $request->input('date');
        $post->beginTime = $request->input('beginTime');
        $post->endTime = $request->input('endTime');
        $post->user_id = $user->id;
        $post->save();
        return redirect('/hour')->with('success', 'hours registrated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = HourRegistration::find($id);
        $salary = $show->endTime - $show->beginTime;
        $total = $salary * 4.56;
        return view('/show', ['show' => $show, 'total' => $total]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HourRegistration::find($id);
        return view('edit')->with('edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'day' => 'required',
        'date' => 'required',
        'beginTime' => 'required',
        'endTime' => 'required'
      ]);
      $post = HourRegistration::find($id);
      // dd($post);
      $post->day = $request->input('day');
      $post->date = $request->input('date');
      $post->beginTime = $request->input('beginTime');
      $post->endTime = $request->input('endTime');
      // dd($post);
      $post->save();
      return redirect('/hour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = HourRegistration::find($id);
        $delete->delete();
        return back();
    }
}
