<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = [
            "total" => Student::all()->count(),
            "danisan" => Student::where("status","Danışan")->count(),
            "raporlu" => Student::where("status","Raporlu")->count(),
            "ozel"=>Student::where("status","Özel")->count(),
            "ucretsiz"=>Student::where("status","Ücretsiz")->count(),
            "raporbekliyor"=>Student::where("status","Rapor Bekliyor")->count(),
            "ayrildi"=>Student::where("status","Ayrıldı")->count()
        ];
         return view('dashboard',["data"=>$total]);
    }
}
