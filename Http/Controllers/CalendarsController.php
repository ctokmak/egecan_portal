<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Calendar;
use Illuminate\Support\Facades\DB;

class CalendarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('calendars')
            ->join('users', 'calendars.teacher', '=', 'users.id')
            ->join('students', 'calendars.student', '=', 'students.id')
            ->select('calendars.start_date as start', 'calendars.end_date as end', 'users.name as teacher', 'students.name as student')
            ->get();

        $events = array();
        foreach ($data as $item) {
            $events[] = [
            'title' => $item->teacher . " " . $item->student,
            'start' => $item->start,
            'end' => $item->end
        ];
        }
        
       return view('calenders',["students"=>Student::orderBy("name")->get(),"teachers"=>User::orderBy("name")->get(),"events"=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $request->validate([
            'teacher' => 'required|integer',
            'student' => 'required|integer',
            'type' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'notes' => 'nullable|string'
        ]);

        $response = Calendar::create($request->all());

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}