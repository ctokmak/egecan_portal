<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
use App\Models\Form;

class Abblsr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*  $data = DB::select('select * from abblsr');
        $bolumler = DB::select('select distinct bolum_kodu, bolum_adi from abblsr');

        return view('abblsrRapor', ['sonuclar'=>$sonuclar,'sonuclarB'=>$sonuclarB,'bolumler'=>$bolumler,'data' => $data, "students"=>Student::orderBy("name")->get(),"users"=>User::orderBy("name")->get()]); */

        /*         $form = DB::table("forms")
        ->where("form_id","=","4")
        ->where("student_id","=",$student_id)
        ->where("record_id","=",$id)
        ->get(); */




        return view('abblsr', ["students" => Student::orderBy("name")->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::select('select * from abblsr');
        $bolumler = DB::select('select distinct bolum_kodu, bolum_adi from abblsr');
        return view('abblsr', ['bolumler' => $bolumler, 'data' => $data, "students" => Student::orderBy("name")->get(), "users" => User::orderBy("name")->get()]);
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


        $last_form_id = DB::table('forms')->where("student_id", "=", $student_id)->where("form_id", "=", "4")->max("record_id") + 1;

        foreach ($request->except('_token', '_method', 'user_id', 'student_id') as $key => $value) {

            if (isset($value['cevap'])) {
                $soru = $value['soru'];
                $soru_sayisi = $value['soru_sayisi'] - 1;
                $alinan_cevap = $value['cevap'];
                $cevap = [];

                $outcomes = [
                    2 => [
                        1 => [$last_form_id, 0],
                        2 => [$last_form_id, $last_form_id],
                    ],
                    4 => [
                        1 => [$last_form_id, 0, 0, 0],
                        2 => [$last_form_id, $last_form_id, 0, 0],
                        3 => [$last_form_id, $last_form_id, $last_form_id, 0],
                        4 => [$last_form_id, $last_form_id, $last_form_id, $last_form_id],
                    ],
                ];

                $cevap = $outcomes[$soru_sayisi][$alinan_cevap] ?? [0, 0, 0, 0];

                $record = new Form;
                $record->question = $soru;
                $record->answer = implode(',', $cevap);
                $record->soru_sayisi = $soru_sayisi;

                $record->record_date = $date;
                $record->user_id = $teacher_id;
                $record->student_id = $student_id;
                $record->form_id = 4;
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
    public function show($student_id, $id)
    {
        $form = DB::table("forms")
            ->where("form_id", "=", "4")
            ->where("student_id", "=", $student_id)
            ->where("record_id", "=", $id)
            ->get();

        $plucked = collect([]);

        foreach (range('A', 'Z') as $letter) {
            $plucked[$letter] = collect(DB::table("forms")
                ->where("form_id", "=", "4")
                ->where("student_id", "=", $student_id)
                ->where("record_id", "=", $id)
                ->where('question', 'like', $letter . '%')
                ->get())
                ->pluck("answer", "question");
            $plucked[$letter . "rate"] = collect(DB::select("SELECT sum(LENGTH(answer) - LENGTH(REPLACE(answer, '1', ''))) AS 'puan' FROM forms WHERE form_id = ? AND student_id = ? AND record_id = ? AND question LIKE ?", [4, $student_id, $id, "$letter%"]));
        }

        $student = Student::find($student_id);
        $teacher = User::find($form[0]->user_id);

        return view('abblsrRapor', ["student" => $student['name'], "form" => $form, "teacher" => $teacher["name"], "plucked" => $plucked]);
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
