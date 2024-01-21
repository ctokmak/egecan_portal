<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class FormBedenselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formBedenselPerformansBelirleme',["students"=>Student::orderBy("name")->get(),"users"=>User::orderBy("name")->get()]);
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
        $teacher_id = $request['user_id'];
        $student_id = $request['student_id'];
        $date = date('Y-m-d');

$last_form_id = DB::table('forms')->where("student_id","=",$student_id)->where("form_id","=","3")->max("record_id")+1;
        foreach ($request->except('_token','_method','user_id','student_id') as $key => $value){
            if ($value !== NULL) {
                $record = new Form;
                $record->question = $key;
                $record->answer = $value;
                
                $record->record_date = $date;
                $record->user_id = $teacher_id;
                $record->student_id = $student_id;
                $record->form_id =3;
                $record->record_id = $last_form_id;
                $record->save();
            }
        }

        return redirect()->route('dashboard.index');
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