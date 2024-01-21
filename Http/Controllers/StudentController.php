<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Fathers;
use App\Models\Mothers;
use App\Models\Form;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students',["students"=>Student::orderBy("name")->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("studentsAdd");
    }

    /**
     * Store a newly created resource in storage.
     *
 
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $data = $request->validated();
        $data['diagnoses'] = implode(",", $request->diagnoses);
  
        // Use a transaction to ensure data consistency
    DB::transaction(function () use ($data, $request) {
        $student = Student::create($data);
        $father = new Fathers($request->only([
            'father_name', 'father_tc', 'father_school', 'father_job',
            'father_email', 'father_is_alive', 'father_is_together',
            'father_illness', 'father_handicaped', 'father_phone_home',
            'father_phone_work', 'father_phone_cell'
        ]));
        $mother = new Mothers($request->only([
            'mother_name', 'mother_tc', 'mother_school', 'mother_job',
            'mother_email', 'mother_is_alive', 'mother_is_together',
            'mother_illness', 'mother_handicaped', 'mother_phone_home',
            'mother_phone_work', 'mother_phone_cell'
        ]));
        $student->father()->save($father);
        $student->mother()->save($mother);
    });

        // Use eager loading to load the related models in a single query
    $students = Student::with(['father', 'mother'])->get();
    return view('students', compact('students'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forms[0] = DB::table("forms")->select("record_id", "record_date")->distinct("record_id")->where("student_id","=",$id)->where("form_id","=","1")->get();
        $forms[1] = DB::table("forms")->select("record_id", "record_date")->distinct("record_id")->where("student_id","=",$id)->where("form_id","=","2")->get();
        $forms[2] = DB::table("forms")->select("record_id", "record_date")->distinct("record_id")->where("student_id","=",$id)->where("form_id","=","3")->get();
        $forms[3] = DB::table("forms")->select("record_id", "record_date")->distinct("record_id")->where("student_id","=",$id)->where("form_id","=","4")->get();
        $forms[4] = DB::table("forms")->select("record_id", "record_date")->distinct("record_id")->where("student_id","=",$id)->where("form_id","=","5")->get();
        

        return view('studentsShow',["student"=>Student::findOrFail($id),"forms"=>$forms,"father"=>Fathers::where("student_id", $id)->get(),"mother"=>Mothers::where("student_id", $id)->get()]);       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('studentsEdit',["student"=>Student::findOrFail($id),"father"=>Fathers::where("student_id", $id)->get(),"mother"=>Mothers::where("student_id", $id)->get()]);       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, $student)
    {
        $data = $request->validated();
        $data['diagnoses'] = implode(",", $request->diagnoses);

        $record = Student::findOrFail($student);
        $record->update($data);

        $father_data = Fathers::where("student_id", $student)->get();

        if (!empty($father_data[0]) ){
            # update
            Fathers::where("student_id", $student)->update([
                "student_id" => $student,
                "father_name" => $request->father_name,
                "father_tc" => $request->father_tc,
                "father_school" => $request->father_school,
                "father_job" => $request->father_job,
                "father_email" => $request->father_email,
                "father_is_alive" => $request->father_is_alive,
                "father_is_together" => $request->father_is_together,
                "father_illness" => $request->father_illness,
                "father_handicaped" => $request->father_handicaped,
                "father_phone_home" => $request->father_phone_home,
                "father_phone_work" => $request->father_phone_work,
                "father_phone_cell" => $request->father_phone_cell,
            ]);
        } elseif (empty($father_data[0])) {
            # create
            $father = new Fathers;
            $father->student_id = $student;
            $father->father_name = $request->father_name;
            $father->father_tc = $request->father_tc;
            $father->father_school = $request->father_school;
            $father->father_job = $request->father_job;
            $father->father_email = $request->father_email;
            $father->father_is_alive = $request->father_is_alive;
            $father->father_is_together = $request->father_is_together;
            $father->father_illness = $request->father_illness;
            $father->father_handicaped = $request->father_handicaped;
            $father->father_phone_home = $request->father_phone_home;
            $father->father_phone_work = $request->father_phone_work;
            $father->father_phone_cell = $request->father_phone_cell;

            $father->save();
        }

        $mother_data = Mothers::where("student_id", $student)->get();

        if (!empty($mother_data[0]) ){
            # update
            
            Mothers::where("student_id", $student)->update([
                "student_id" => $student,
                "mother_name" => $request->mother_name,
                "mother_tc" => $request->mother_tc,
                "mother_school" => $request->mother_school,
                "mother_job" => $request->mother_job,
                "mother_email" => $request->mother_email,
                "mother_is_alive" => $request->mother_is_alive,
                "mother_is_together" => $request->mother_is_together,
                "mother_illness" => $request->mother_illness,
                "mother_handicaped" => $request->mother_handicaped,
                "mother_phone_home" => $request->mother_phone_home,
                "mother_phone_work" => $request->mother_phone_work,
                "mother_phone_cell" => $request->mother_phone_cell,
            ]);
        } elseif (empty($mother_data[0])) {
            # create
            
            $mother = new Mothers;
            $mother->student_id = $student;
            $mother->mother_name = $request->mother_name;
            $mother->mother_tc = $request->mother_tc;
            $mother->mother_school = $request->mother_school;
            $mother->mother_job = $request->mother_job;
            $mother->mother_email = $request->mother_email;
            $mother->mother_is_alive = $request->mother_is_alive;
            $mother->mother_is_together = $request->mother_is_together;
            $mother->mother_illness = $request->mother_illness;
            $mother->mother_handicaped = $request->mother_handicaped;
            $mother->mother_phone_home = $request->mother_phone_home;
            $mother->mother_phone_work = $request->mother_phone_work;
            $mother->mother_phone_cell = $request->mother_phone_cell;

            $mother->save();
        }
        
        return redirect()->route('students.show',$student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Student::find($id);
        $record->delete();
        return view('students',["students"=>Student::all()]);
    }

    public function upload(Request $request, $id)
    {
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
 
        $name = $request->file('image')->getClientOriginalName();
 
        $avatar = $request->file('image')->store('public/images');

        $url = Storage::url($avatar);
        
        $record = Student::findOrFail($id);
        $record->avatar = $url;
        $record->save();
        
        return response()->json($record);
 
    }
}