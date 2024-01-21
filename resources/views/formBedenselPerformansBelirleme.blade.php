@extends("layouts.app")
@section("content")
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bedensel Performans Belirleme Formu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anasayfa</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form method="POST" action="{{ route('bedenselperformans.store') }}">
            @csrf
            @method("POST")
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Öğrenci</label>
                        <select class="custom-select" name="student_id">
                            @foreach($students as $student )
                            <option value="{{$student['id']}}">{{$student['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Öğretmen</label>
                        <select class="custom-select" name="user_id">
                            @foreach($users as $user )
                            <option value="{{$user['id']}}">{{$user['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <h3 class="text-center text-dark font-weight-bold bg-warning p-5">Kaba Motor Beceriler</h3>
            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseA">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Sırtüstü Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseA" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">simetrik vücut algısı pozisyonu edinir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="11" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">vücut düzgünlüğünü korur</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="12" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yakın çevresi ile etkileşime girmek için baş ve
                                                boyun pozisyonunu bağımsız olarak korur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="13" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Kol bacak hareketlerini kullanarak günlük yaşam
                                                becerilerini gerçekleştirmeye destek verir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="14" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Her iki yana bağımsız olarak döner</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="15" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseB">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Yüzüstü Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseB" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yan yatış pozisyonundan dönerek yüzüstü
                                                pozisyona geçer.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="21" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Sırtüstü yatış pozisyonundan dönerek yüzüstü
                                                pozisyona geçer.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="22" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Bağımsız baş kontrolünü sağlar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="23" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Kollar ve gövdenin simetrik duruşunu sağlar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="24" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Kollarından destek alarak üst gövdesini
                                                kaldırır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="25" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Vücudunun çeşitli bölümlerini destek noktası
                                                olarak kullanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="26" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Bir elinden destek alarak diğer elini amaca
                                                yönelik kullanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="27" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Çevresiyle etkileşime girmede uygun vücut
                                                pozisyonu alır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="28" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">9</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Vücut farkındalığı artar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="29" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">10</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Gövde ağırlığını elleri ve ön kolları üzerinde
                                                taşıyarak ağırlık aktarır</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="210" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">11</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Gövdesini, kollarını ve bacaklarını kullanarak
                                                ilerler (sürünür) ve yön değiştirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="211" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseC">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Destekli Oturma Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseC" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturma pozisyonunda baş kontrolünü
                                                sağlar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="31" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturuma pozisyonunda kolları orta hatta
                                                getirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="32" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturma pozisyonunda iken kolları ile
                                                farklı yönlere uzanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="33" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturma pozisyonunda nesneleri tutar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="34" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturma pozisyonunda ellerini ve
                                                kollarını kullanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="35" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Vücudu dik pozisyona getirir ve korur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="36" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseD">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Desteksiz Oturma Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseD" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturma pozisyonunda baş kontrolünü
                                                sağlar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="31" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturuma pozisyonunda kolları orta hatta
                                                getirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="32" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturma pozisyonunda iken kolları ile
                                                farklı yönlere uzanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="33" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturma pozisyonunda nesneleri tutar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="34" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Destekli oturma pozisyonunda ellerini ve
                                                kollarını kullanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="35" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Vücudu dik pozisyona getirir ve korur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="36" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseE">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Emekleme Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseE" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Öne doğru sürünür.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="51" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yüzükoyun pozisyondan emekleme pozisyonuna
                                                geçer.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="52" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Emekleme pozisyonunda kollarına ve bacaklarına
                                                ağırlık aktarır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="53" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Kollarını, bacaklarını ve gövdesini kullanarak
                                                ileri-geri emekler.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="54" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Emekleme pozisyonundan oturmaya geçer.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="55" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Basamaklı yüzeyleri emekleyerek çıkar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="56" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Basamaklı yüzeyleri emekleyerek geri geri iner.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="57" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Günlük yaşam aktivitelerinde emekleyerek yer
                                                değiştirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="58" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseF">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Dizüstü Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseF" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Emekleme pozisyonundan ellerinden destek
                                                alarak
                                                dizüstü pozisyona</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="61" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yerde oturma pozisyonundan dizüstü pozisyona
                                                geçer.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="62" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Dizüstünde simetrik durur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="63" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Dizüstünde öne doğru hareket eder.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="64" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Gövde ve kalçanın birlikte kontrolünü
                                                sağlar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="65" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Sağ dizüstünden yarım dizüstü pozisyona
                                                gelir.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="66" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Sol dizüstünden yarım dizüstü pozisyona
                                                gelir.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="67" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseG">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Ayakta Durma Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseG" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Oturma pozisyonundan ayakta durma
                                                pozisyonuna
                                                geçer.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="71" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Dizüstü pozisyondan yarım dizüstü pozisyona
                                                geçerek ayağa kalkar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="72" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ellerinden destek alarak çömelip kalkar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="73" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ayakta duruş pozisyonunda diz, kalça ve
                                                gövdesini kontrol eder.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="74" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ayakta dururken her iki tarafa ağırlık
                                                aktarır.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="75" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ellerinden ya da gövdesinden destek alarak
                                                farklı yönlere uzanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="76" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ayaklarını tek tek yerden kaldırır</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="77" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseH">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Destekli Yürüme Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseH" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı yönlere uzanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="81" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yerden bir nesneyi alarak doğrulur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="82" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ellerinden destek alarak yana doğru adım
                                                atar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="83" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Duvardan destek alarak yana doğru yürür.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="84" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ellerinden destek alarak gideceği yöne doğru
                                                döner.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="85" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Seçilen uygun yardımcı araç veya destekle
                                                adım
                                                atar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="86" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Seçilen uygun yardımcı araç veya destekle
                                                yürür.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="87" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yürürken yön değiştirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="88" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseI">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Desteksiz Yürüme Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseI" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı yönlere uzanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="81" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yerden bir nesneyi alarak doğrulur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="82" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ellerinden destek alarak yana doğru adım
                                                atar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="83" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Duvardan destek alarak yana doğru yürür.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="84" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ellerinden destek alarak gideceği yöne doğru
                                                döner.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="85" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Seçilen uygun yardımcı araç veya destekle
                                                adım
                                                atar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="86" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Seçilen uygun yardımcı araç veya destekle
                                                yürür.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="87" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yürürken yön değiştirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="88" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseJ">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Merdiven İnip Çıkma Kaba Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseJ" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Bir ayağını dengesini koruyarak bir alt
                                                basamağa
                                                indirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="101" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Vücut ağırlığını kontrollü şekilde alt
                                                basamaktaki ayağına aktarır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="102" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Arkadaki ayağını uygun şekilde aynı veya bir
                                                alt
                                                basamağa indirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="103" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Merdiven inme hareketlerini ritmik ve
                                                simetrik
                                                olacak şekilde her iki tarafta tekrar eder.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="104" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Bir ayağını dengesini koruyarak üst basamağa
                                                yerleştirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="105" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Vücut ağırlığını üst basamağa yerleştirilmiş
                                                ayağa aktarır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="106" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Alt basamakta kalan ayağı aynı basamağa veya
                                                üst
                                                basamağa yerleştirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="107" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Merdiven çıkma hareketlerini ritmik ve
                                                simetrik
                                                olacak şekilde her iki tarafta tekrar eder.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="108" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseK">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    İleri Düzey Fonksiyonel Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseK" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">İki çizgi arasında öne ve yana doğru yürür.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="111" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Tek çizgi üzerinde öne ve yana doğru yürür.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="112" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Öne doğru iki ayak üzerinde sıçrayarak
                                                ilerler.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="113" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Öne doğru tek ayak üzerinde sıçrayarak
                                                ilerler.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="114" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı yükseklikteki engelleri sıçrayarak
                                                geçer.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="115" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Rampadan bağımsız olarak çıkar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="116" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Rampadan bağımsız olarak iner.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="117" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı şekiller üzerinde yürür.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="118" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">9</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı yükseklikteki basamaktan sıçrayarak
                                                iner.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="119" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <h3 class="text-center text-dark font-weight-bold bg-warning p-5">İnce Motor Beceriler</h3>
            <div class="row">
                <div class="col-12" id="accordion2">
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseL">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Çizim Becerileri
                                </h4>
                            </div>
                        </a>
                        <div id="collapseL" class="collapse" data-parent="#accordion2">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">İki çizgi arasında öne ve yana doğru yürür.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="111" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Tek çizgi üzerinde öne ve yana doğru yürür.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="112" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Öne doğru iki ayak üzerinde sıçrayarak ilerler.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="113" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Öne doğru tek ayak üzerinde sıçrayarak ilerler.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="114" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı yükseklikteki engelleri sıçrayarak geçer.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="115" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Rampadan bağımsız olarak çıkar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="116" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Rampadan bağımsız olarak iner.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="117" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı şekiller üzerinde yürür.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="118" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">9</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı yükseklikteki basamaktan sıçrayarak iner.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="119" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseM">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Tutma ve Bırakma Becerisi
                                </h4>
                            </div>
                        </a>
                        <div id="collapseM" class="collapse" data-parent="#accordion2">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneye eliyle uzanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="21" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneyi bir elinden diğer eline geçirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="22" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">El bileğini yukarı kaldırarak orta pozisyonda
                                                nesneyi tutar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="23" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Dirsek bükülü ve düz iken nesneyi tutar ve
                                                bırakır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="24" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı omuz yüksekliklerinde nesneyi tutar ve
                                                bırakır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="25" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Avuç içinin yukarı veya aşağı doğru dönük olduğu
                                                pozisyonlarda nesneyi tutar ve bırakır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="26" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı tutma tipleri ile nesneleri tutar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="27" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri yeterli kuvvetle tutar ve istemli
                                                bırakır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="28" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">9</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri uygun temas alanlarıyla tutar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="29" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">10</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri, vücut düzgünlüğünü koruyarak tutar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="210" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseN">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    El Becerileri ve El Göz Koordinasyonu
                                </h4>
                            </div>
                        </a>
                        <div id="collapseN" class="collapse" data-parent="#accordion2">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneye eliyle uzanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="21" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneyi bir elinden diğer eline geçirir.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="22" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">El bileğini yukarı kaldırarak orta pozisyonda
                                                nesneyi tutar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="23" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Dirsek bükülü ve düz iken nesneyi tutar ve
                                                bırakır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="24" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı omuz yüksekliklerinde nesneyi tutar ve
                                                bırakır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="25" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Avuç içinin yukarı veya aşağı doğru dönük olduğu
                                                pozisyonlarda nesneyi tutar ve bırakır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="26" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Farklı tutma tipleri ile nesneleri tutar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="27" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">8</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri yeterli kuvvetle tutar ve istemli
                                                bırakır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="28" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">9</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri uygun temas alanlarıyla tutar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="29" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">10</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri, vücut düzgünlüğünü koruyarak tutar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="210" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseO">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Proprioseptif Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseO" class="collapse" data-parent="#accordion2">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri iterek kas ve eklemlere uyarı verir.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="41" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri çekerek kas ve eklemlere uyarı verir.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="42" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Elleri üzerinde yürür.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="43" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yüzüstü yatarken elleri üzerinde baş ve
                                                gövdesini kaldırır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="44" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Gözler açık ve kapalı vücut pozisyonunun
                                                farkında olur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="45" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Bara tırmanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="46" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseP">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Dokunma Duyusu Becerileri
                                </h4>
                            </div>
                        </a>
                        <div id="collapseP" class="collapse" data-parent="#accordion2">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri iterek kas ve eklemlere uyarı verir.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="41" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Nesneleri çekerek kas ve eklemlere uyarı verir.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="42" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Elleri üzerinde yürür.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="43" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Yüzüstü yatarken elleri üzerinde baş ve
                                                gövdesini kaldırır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="44" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Gözler açık ve kapalı vücut pozisyonunun
                                                farkında olur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="45" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Bara tırmanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="46" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseQ">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Görsel Algılama Becerileri
                                </h4>
                            </div>
                        </a>
                        <div id="collapseQ" class="collapse" data-parent="#accordion2">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Şekli kopya eder.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="61" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Eksik resmi tamamlar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="62" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Parça bütün ilişkisi kurar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="63" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Şekillerin benzerliklerini ayırt eder.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="64" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Şekillerin farklılıklarını ayırt eder.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="65" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Rakam ve harflerin yönünü karıştırmadan yazar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="66" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Üst üstte çizilmiş şekilleri ayırt eder.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="67" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseR">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    Denge Becerileri
                                </h4>
                            </div>
                        </a>
                        <div id="collapseR" class="collapse" data-parent="#accordion2">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">1</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Ayakta desteksiz durur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="71" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">2</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Tek ayak üzerinde dengede durur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="72" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">3</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Elleri ile destek alarak trambolinde zıplar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="73" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">4</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Elleri ile destek almadan trambolinde zıplar.
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="74" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">5</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Egzersiz topu üzerinde denge ve pozisyonunu
                                                korur.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="75" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">6</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Denge tahtasında öne ve yana doğru adım atarak
                                                salınım yapar.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="76" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <h5 class="text-danger font-weight-bold">7</h5>
                                        </div>
                                        <div class="col-10 col-md-8">
                                            <h6 class="text-capitalize">Değişik pozisyonlarda salıncakta sallanır.</h6>
                                        </div>
                                        <div class="col-12 col-md-2"><select name="77" class="custom-select inline">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
            <script>
            document.onsubmit = function() {
                return confirm('Kayıt tamamlansın mı?');
            }
            </script>
        </form>
    </section>
</div>
@endsection
@section("scripts")
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
@endsection

@section("css")
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- fullCalendar -->
<link rel="stylesheet" href="{{asset('plugins/fullcalendar/main.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
@endsection