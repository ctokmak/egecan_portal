@extends("layouts.app")
@section("content")
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gelişim Değerlendirme Formu</h1>
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
        <form method="POST" action="{{ route('gelisimdegerlendirme.store') }}">
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

            <div class="row">
                <div class="col-12" id="accordion">
                    <!-- A -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseA">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    A - Sosyal Etkileşim
                                </h4>
                            </div>
                        </a>
                        <div id="collapseA" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">
                                        1. Adına Tepki
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                a
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Etkinlikle Meşgulken
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="1" name="a1a"
                                                        value="Evet">
                                                    <label for="1"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="2" name="a1a"
                                                        value="Evet">
                                                    <label for="2"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar" name="a1a_notes">
                                            </div>

                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                b
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Etkinlikle Meşgulken Değilken
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="3" name="a1b"
                                                        value="Evet">
                                                    <label for="3"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="4" name="a1b"
                                                        value="Hayır">
                                                    <label for="4"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="a1b_notes">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">
                                        2. Göz Kontağı
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">

                                            </div>
                                            <div class="col-11 col-md-3">

                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="5" name="a2"
                                                        value="Evet">
                                                    <label for="5"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="6" name="a2"
                                                        value="Hayır">
                                                    <label for="6"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="a2_notes">
                                            </div>

                                        </div>


                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">
                                        3. İşaret Etme
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">

                                            </div>
                                            <div class="col-11 col-md-3">

                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="7" name="a3"
                                                        value="Evet">
                                                    <label for="7"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="8" name="a3"
                                                        value="Hayır">
                                                    <label for="8"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="a3_notes">
                                            </div>

                                        </div>


                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">
                                        4. Sohbet
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                a
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Etme
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="9" name="a4a"
                                                        value="Evet">
                                                    <label for="9"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="10" name="a4a"
                                                        value="Hayır">
                                                    <label for="10"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="a4a_notes">
                                            </div>

                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                b
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Sürdürme
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="11" name="a4b"
                                                        value="Evet">
                                                    <label for="11"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="12" name="a4b"
                                                        value="Hayır">
                                                    <label for="12"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="a4b_notes">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- B -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseB">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    B - Eşleme ve İlişkilendirme
                                </h4>
                            </div>
                        </a>
                        <div id="collapseB" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">
                                        1. Eşleme
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                a
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Nesne - Nesne
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="13" name="b1a"
                                                        value="Evet">
                                                    <label for="13"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="14" name="b1a"
                                                        value="Hayır">
                                                    <label for="14"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="b1a_notes">
                                            </div>

                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                b
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Resim - Resim
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="15" name="b1b"
                                                        value="Evet">
                                                    <label for="15"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="16" name="b1b"
                                                        value="Hayır">
                                                    <label for="16"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="b1b_notes">
                                            </div>

                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                c
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Rakam - Rakam
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="17" name="b1c"
                                                        value="Evet">
                                                    <label for="17"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="18" name="b1c"
                                                        value="Hayır">
                                                    <label for="18"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="b1c_notes">
                                            </div>

                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                d
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Sözcük - Sözcük
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="1888" name="b1d"
                                                        value="Evet">
                                                    <label for="1888"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="19" name="b1d"
                                                        value="Hayır">
                                                    <label for="19"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="b1d_notes">
                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-12 bg-warning font-weight-bold">
                                        2. İlişkilendirme
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                a
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Resim - Nesne
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="20" name="b2a"
                                                        value="Evet">
                                                    <label for="20"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="21" name="b2a"
                                                        value="Hayır">
                                                    <label for="21"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="b2a_notes">
                                            </div>

                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                b
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Sözcük - Nesne
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="22" name="b2b"
                                                        value="Evet">
                                                    <label for="22"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="23" name="b2b"
                                                        value="Hayır">
                                                    <label for="23"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="b2b_notes">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- C -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseC">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    C - Taklit Becerileri
                                </h4>
                            </div>
                        </a>
                        <div id="collapseC" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">
                                        1. Nesnesiz Taklit
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                a
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Alkış yapma
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="24" name="c1a"
                                                        value="Evet">
                                                    <label for="24"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="25" name="c1a"
                                                        value="Hayır">
                                                    <label for="25"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c1a_notes">
                                            </div>

                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                b
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Başına dokunma
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="26" name="c1b"
                                                        value="Evet">
                                                    <label for="26"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="27" name="c1b"
                                                        value="Hayır">
                                                    <label for="27"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c1b_notes">
                                            </div>

                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                c
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Masaya vurma
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="28" name="c1c"
                                                        value="Evet">
                                                    <label for="28"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="29" name="c1c"
                                                        value="Hayır">
                                                    <label for="29"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c1c_notes">
                                            </div>

                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                d
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Burna dokunma
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="30" name="c1d"
                                                        value="Evet">
                                                    <label for="30"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="31" name="c1d"
                                                        value="Hayır">
                                                    <label for="31"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c1d_notes">
                                            </div>

                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                e
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Kolları bağlama
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="33" name="c1e"
                                                        value="Evet">
                                                    <label for="33"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="34" name="c1e"
                                                        value="Hayır">
                                                    <label for="34"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c1e_notes">
                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-12 bg-warning font-weight-bold">
                                        2. Nesneli Taklit
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                a
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Lego takma
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="35" name="c2a"
                                                        value="Evet">
                                                    <label for="35"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="36" name="c2a"
                                                        value="Hayır">
                                                    <label for="36"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c2a_notes">
                                            </div>

                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                b
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Kağıt kesme
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="37" name="c2b"
                                                        value="Evet">
                                                    <label for="37"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="38" name="c2b"
                                                        value="Hayır">
                                                    <label for="38"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c2b_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                c
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Çizgi çizme
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="39" name="c2c"
                                                        value="Evet">
                                                    <label for="39"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="399" name="c2c"
                                                        value="Hayır">
                                                    <label for="399"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c2c_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                d
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Bardağa küp atma
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="3399" name="c2d"
                                                        value="Evet">
                                                    <label for="3399"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="40" name="c2d"
                                                        value="Hayır">
                                                    <label for="40"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c2d_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                e
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Kalem kapağı takma
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="41" name="c2e"
                                                        value="Evet">
                                                    <label for="41"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="42" name="c2e"
                                                        value="Hayır">
                                                    <label for="42"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c2e_notes">
                                            </div>
                                        </div>





                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">
                                        3. Sözel Taklit
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                a
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Ses (a,e,ı,i,o,ö,u,ü)
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="43" name="c3a"
                                                        value="Evet">
                                                    <label for="43"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="44" name="c3a"
                                                        value="Hayır">
                                                    <label for="44"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c3a_notes">
                                            </div>

                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                b
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Sözcük (baba, anne, aç, su, al-ver)
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="45" name="c3b"
                                                        value="Evet">
                                                    <label for="45"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="46" name="c3b"
                                                        value="Hayır">
                                                    <label for="46"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c3b_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">
                                                c
                                            </div>
                                            <div class="col-11 col-md-3">
                                                Cümle (su istiyorum, karnım acıktı)
                                            </div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="47" name="c3c"
                                                        value="Evet">
                                                    <label for="47"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="48" name="c3c"
                                                        value="Hayır">
                                                    <label for="48"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="c3c_notes">
                                            </div>
                                        </div>







                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- D -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseD">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    D - Yönerge Takibi
                                </h4>
                            </div>
                        </a>
                        <div id="collapseD" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">
                                        1. Adına tepki verir
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="49" name="d1"
                                                        value="Evet">
                                                    <label for="49"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="50" name="d1"
                                                        value="Hayır">
                                                    <label for="50"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d1_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">2. Tek basamaklı yönergeleri uygular
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">a</div>
                                            <div class="col-11 col-md-3">Bana bak</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="51" name="d2a"
                                                        value="Evet">
                                                    <label for="51"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="52" name="d2a"
                                                        value="Hayır">
                                                    <label for="52"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d2a_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">b</div>
                                            <div class="col-11 col-md-3">Kalk</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="53" name="d2b"
                                                        value="Evet">
                                                    <label for="53"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="54" name="d2b"
                                                        value="Hayır">
                                                    <label for="54"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d2b_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">c</div>
                                            <div class="col-11 col-md-3">Otur</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="55" name="d2c"
                                                        value="Evet">
                                                    <label for="55"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="56" name="d2c"
                                                        value="Hayır">
                                                    <label for="56"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d2c_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">d</div>
                                            <div class="col-11 col-md-3">Ellerini cebine sok</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="57" name="d2d"
                                                        value="Evet">
                                                    <label for="57"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="58" name="d2d"
                                                        value="Hayır">
                                                    <label for="58"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d2d_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">e</div>
                                            <div class="col-11 col-md-3">Buraya gel</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="59" name="d2e"
                                                        value="Evet">
                                                    <label for="59"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="60" name="d2e"
                                                        value="Hayır">
                                                    <label for="60"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d2e_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">3. İki basamaklı yönergeleri uygular
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">a</div>
                                            <div class="col-11 col-md-3">Ellerini cebine sok, kapıyı kapat</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="61" name="d3a"
                                                        value="Evet">
                                                    <label for="61"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="62" name="d3a"
                                                        value="Hayır">
                                                    <label for="62"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d3a_notes">
                                            </div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">b</div>
                                            <div class="col-11 col-md-3">Burnunu sil, peçeteyi çöpe at</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="63" name="d3b"
                                                        value="Evet">
                                                    <label for="63"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="64" name="d3b"
                                                        value="Hayır">
                                                    <label for="64"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d3b_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">4. Koşullu yönerge uygular.
                                        (Karşılıklı oyun oynarken, üstünde kırmızı tişört olan çocuk elini havaya
                                        kaldırsın.)</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="65" name="d4"
                                                        value="Evet">
                                                    <label for="65"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="66" name="d4"
                                                        value="Hayır">
                                                    <label for="66"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d4_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">
                                        5. Etkinlik içi / dışı yönergeleri uygular.
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="67" name="d5"
                                                        value="Evet">
                                                    <label for="67"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="68" name="d5"
                                                        value="Hayır">
                                                    <label for="68"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="d5_notes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- E -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseE">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    E - İstek Bildirme
                                </h4>
                            </div>
                        </a>
                        <div id="collapseE" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">1. İşaret ederek kendiliğinden talep
                                        etme</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="69" name="e1"
                                                        value="Evet">
                                                    <label for="69"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="70" name="e1"
                                                        value="Hayır">
                                                    <label for="70"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="e1_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">2. Ne istiyorsun? sorusuna işaretle
                                        talep eder</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="71" name="e2"
                                                        value="Evet">
                                                    <label for="71"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="72" name="e2"
                                                        value="Hayır">
                                                    <label for="72"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="e2_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">3. Göz teması kurarak talep etme
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="73" name="e3"
                                                        value="Evet">
                                                    <label for="73"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="74" name="e3"
                                                        value="Hayır">
                                                    <label for="74"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="e3_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">4. Başkalarından birşey yapmasını
                                        talep eder</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="75" name="e4"
                                                        value="Evet">
                                                    <label for="75"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="76" name="e4"
                                                        value="Hayır">
                                                    <label for="76"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="e4_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">5. Kafa hareketi ile EVET/HAYIR der
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="766" name="e5"
                                                        value="Evet">
                                                    <label for="766"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="77" name="e5"
                                                        value="Hayır">
                                                    <label for="77"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="e5_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">6. Cümle kurarak talep eder</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="777" name="e6"
                                                        value="Evet">
                                                    <label for="777"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="78" name="e6"
                                                        value="Hayır">
                                                    <label for="78"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="e6_notes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- F -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseF">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    F - İsimlendirme
                                </h4>
                            </div>
                        </a>
                        <div id="collapseF" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">1. Nesne isimlendirme</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="81" name="f1"
                                                        value="Evet">
                                                    <label for="81"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="82" name="f1"
                                                        value="Hayır">
                                                    <label for="82"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="f1_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">2. Kişi isimlendirme (anne, baba, bu
                                        kim sorusu sorularak)</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="83" name="f2"
                                                        value="Evet">
                                                    <label for="83"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="84" name="f2"
                                                        value="Hayır">
                                                    <label for="84"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="f2_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">3. Vücut bölümlerini isimlendirme
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="85" name="f3"
                                                        value="Evet">
                                                    <label for="85"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="86" name="f3"
                                                        value="Hayır">
                                                    <label for="86"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="f3_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">4. Olay isimlendirme (bu ne yapıyor)
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="87" name="f4"
                                                        value="Evet">
                                                    <label for="87"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="88" name="f4"
                                                        value="Hayır">
                                                    <label for="88"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="f4_notes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- G -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseG">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    G - Pragmatik Dil
                                </h4>
                            </div>
                        </a>
                        <div id="collapseG" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">1. Şarkılardaki kelimeleri
                                        tamamlamak. (Ali babanın çiftliğinde koyunları var.............çocuğun devam
                                        ettirmesi)</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="89" name="g1"
                                                        value="Evet">
                                                    <label for="89"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="90" name="g1"
                                                        value="Hayır">
                                                    <label for="90"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="g1_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">2. Olayları tamamlama (hadi aşağı ve
                                        yukarı ............ (*zıplayalım))</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="91" name="g2"
                                                        value="Evet">
                                                    <label for="91"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="92" name="g2"
                                                        value="Hayır">
                                                    <label for="92"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="g2_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">3. Hayvan sesleri tamamlama
                                        (köpek....der (hav hav))</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="93" name="g3"
                                                        value="Evet">
                                                    <label for="93"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="94" name="g3"
                                                        value="Hayır">
                                                    <label for="94"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="g3_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">4. Kişisel bilgi sorularını cevaplar
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="95" name="g4"
                                                        value="Evet">
                                                    <label for="95"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="96" name="g4"
                                                        value="Hayır">
                                                    <label for="96"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="g4_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">5. Ortak aktivite adlandırır. (el
                                        yıkayan bir çocuk resmi gördüğünde ve.......... ne?) yapmanın tam zamanı
                                        denildiğinde "elini yıkamanın" cevabını vermesi)</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="9666" name="g5"
                                                        value="Evet">
                                                    <label for="9666"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="97" name="g5"
                                                        value="Hayır">
                                                    <label for="97"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="g5_notes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- H -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseH">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    H - Motor Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseH" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">1. Küçük motor</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">a</div>
                                            <div class="col-11 col-md-3">Rastgele kesme</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="98" name="h1a"
                                                        value="Evet">
                                                    <label for="98"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="99" name="h1a"
                                                        value="Hayır">
                                                    <label for="99"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="h1a_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">b</div>
                                            <div class="col-11 col-md-3">Sınırlı alanı kesme</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="999999" name="h1b"
                                                        value="Evet">
                                                    <label for="999999"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="100" name="h1b"
                                                        value="Hayır">
                                                    <label for="100"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="h1b_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">c</div>
                                            <div class="col-11 col-md-3">Çizim kopya etme</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="101" name="h1c"
                                                        value="Evet">
                                                    <label for="101"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="102" name="h1c"
                                                        value="Hayır">
                                                    <label for="102"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="h1c_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">2. Büyük motor</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">a</div>
                                            <div class="col-11 col-md-3">Yürüme</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="103" name="h2a"
                                                        value="Evet">
                                                    <label for="103"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="104" name="h2a"
                                                        value="Hayır">
                                                    <label for="104"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="h2a_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">b</div>
                                            <div class="col-11 col-md-3">Koşma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="105" name="h2b"
                                                        value="Evet">
                                                    <label for="105"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="106" name="h2b"
                                                        value="Hayır">
                                                    <label for="106"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="h2b_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">c</div>
                                            <div class="col-11 col-md-3">Tırmanma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="1066" name="h2c"
                                                        value="Evet">
                                                    <label for="1066"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="107" name="h2c"
                                                        value="Hayır">
                                                    <label for="107"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="h2c_notes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- I -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseI">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    I - Oyun ve Serbest Zaman
                                </h4>
                            </div>
                        </a>
                        <div id="collapseI" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">1. Çevredeki oyuncakları farkeder
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="108" name="i1"
                                                        value="Evet">
                                                    <label for="108"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="109" name="i1"
                                                        value="Hayır">
                                                    <label for="109"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i1_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">2. Diğer kişilerin onun oyuncakları
                                        ile oynamasına izin verir</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="110" name="i2"
                                                        value="Evet">
                                                    <label for="110"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="111" name="i2"
                                                        value="Hayır">
                                                    <label for="111"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i2_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">3. Dışarıda bağımsız vakit geçirir.
                                        (Anneden bilgi alınız)</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="112" name="i3"
                                                        value="Evet">
                                                    <label for="112"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="113" name="i3"
                                                        value="Hayır">
                                                    <label for="113"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i3_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">4. Kapalı alan içerisinde bağımsız
                                        vakit geçirir</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="114" name="i4"
                                                        value="Evet">
                                                    <label for="114"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="115" name="i4"
                                                        value="Hayır">
                                                    <label for="115"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i4_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">5. Yalnız oynarken oyun adlandırır
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="116" name="i5"
                                                        value="Evet">
                                                    <label for="116"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="117" name="i5"
                                                        value="Hayır">
                                                    <label for="117"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i5_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">6. Oyun kurarken oyunla alakalı
                                        sesler çıkartır</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="118" name="i6"
                                                        value="Evet">
                                                    <label for="118"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="119" name="i6"
                                                        value="Hayır">
                                                    <label for="119"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i6_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">7. Diğer çocuklarlar interaktif oyun
                                        oynar. (Anneden bilgi alınız)</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="120" name="i7"
                                                        value="Evet">
                                                    <label for="120"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="121" name="i7"
                                                        value="Hayır">
                                                    <label for="121"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i7_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">8. Yap-Boz</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">a</div>
                                            <div class="col-11 col-md-3">İlişki</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="122" name="i8a"
                                                        value="Evet">
                                                    <label for="122"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="123" name="i8a"
                                                        value="Hayır">
                                                    <label for="123"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i8a_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">b</div>
                                            <div class="col-11 col-md-3">İlişkisiz</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="124" name="i8b"
                                                        value="Evet">
                                                    <label for="124"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="125" name="i8b"
                                                        value="Hayır">
                                                    <label for="125"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i8b_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">9. Oyun oynama</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger"></div>
                                            <div class="col-11 col-md-3"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="126" name="i9"
                                                        value="Evet">
                                                    <label for="126"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="127" name="i9"
                                                        value="Hayır">
                                                    <label for="127"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="i9_notes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- J -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseJ">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    J - Akademik Beceriler
                                </h4>
                            </div>
                        </a>
                        <div id="collapseJ" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning font-weight-bold">1. Türkçe</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">a</div>
                                            <div class="col-11 col-md-3">Sözcük tanıma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="128" name="j1a"
                                                        value="Evet">
                                                    <label for="128"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="129" name="j1a"
                                                        value="Hayır">
                                                    <label for="129"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j1a_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">b</div>
                                            <div class="col-11 col-md-3">Sözcük okuma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="130" name="j1b"
                                                        value="Evet">
                                                    <label for="130"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="131" name="j1b"
                                                        value="Hayır">
                                                    <label for="131"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j1b_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">c</div>
                                            <div class="col-11 col-md-3">Sözcük yazma / kopya etme</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="132" name="j1c"
                                                        value="Evet">
                                                    <label for="132"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="133" name="j1c"
                                                        value="Hayır">
                                                    <label for="133"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j1c_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">d</div>
                                            <div class="col-11 col-md-3">Metin okuma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="134" name="j1d"
                                                        value="Evet">
                                                    <label for="134"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="135" name="j1d"
                                                        value="Hayır">
                                                    <label for="135"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j1d_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">e</div>
                                            <div class="col-11 col-md-3">Okuma / anlama</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="136" name="j1e"
                                                        value="Evet">
                                                    <label for="136"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="137" name="j1e"
                                                        value="Hayır">
                                                    <label for="137"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j1e_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">2. Matematik</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">a</div>
                                            <div class="col-11 col-md-3">Ritmeik sayma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="138" name="j2a"
                                                        value="Evet">
                                                    <label for="138"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="139" name="j2a"
                                                        value="Hayır">
                                                    <label for="139"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j2a_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">b</div>
                                            <div class="col-11 col-md-3">Nesne sayma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="140" name="j2b"
                                                        value="Evet">
                                                    <label for="140"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="141" name="j2b"
                                                        value="Hayır">
                                                    <label for="141"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j2b_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">c</div>
                                            <div class="col-11 col-md-3">Tane sayma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="142" name="j2c"
                                                        value="Evet">
                                                    <label for="142"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="143" name="j2c"
                                                        value="Hayır">
                                                    <label for="143"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j2c_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">d</div>
                                            <div class="col-11 col-md-3">Rakam tanıma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="144" name="j2d"
                                                        value="Evet">
                                                    <label for="144"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="145" name="j2d"
                                                        value="Hayır">
                                                    <label for="145"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j2d_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">e</div>
                                            <div class="col-11 col-md-3">Toplama</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="146" name="j2e"
                                                        value="Evet">
                                                    <label for="146"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="147" name="j2e"
                                                        value="Hayır">
                                                    <label for="147"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j2e_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">f</div>
                                            <div class="col-11 col-md-3">Çıkartma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="148" name="j2f"
                                                        value="Evet">
                                                    <label for="148"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="149" name="j2f"
                                                        value="Hayır">
                                                    <label for="149"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j2f_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">g</div>
                                            <div class="col-11 col-md-3">Çarpma</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="150" name="j2g"
                                                        value="Evet">
                                                    <label for="150"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="151" name="j2g"
                                                        value="Hayır">
                                                    <label for="151"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j2g_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">h</div>
                                            <div class="col-11 col-md-3">Bölme</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="152" name="j2h"
                                                        value="Evet">
                                                    <label for="152"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="153" name="j2h"
                                                        value="Hayır">
                                                    <label for="153"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j2h_notes">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 bg-warning font-weight-bold">3. Genel Bilgi</div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">a</div>
                                            <div class="col-11 col-md-3">Bu bir elma? (Kalem gösterip)</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="154" name="j3a"
                                                        value="Evet">
                                                    <label for="154"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="155" name="j3a"
                                                        value="Hayır">
                                                    <label for="155"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j3a_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">b</div>
                                            <div class="col-11 col-md-3">Haftanın günleri neler?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="156" name="j3b"
                                                        value="Evet">
                                                    <label for="156"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="157" name="j3b"
                                                        value="Hayır">
                                                    <label for="157"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j3b_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">c</div>
                                            <div class="col-11 col-md-3">Mevsimler neler?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="158" name="j3c"
                                                        value="Evet">
                                                    <label for="158"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="159" name="j3c"
                                                        value="Hayır">
                                                    <label for="159"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j3c_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">d</div>
                                            <div class="col-11 col-md-3">Bildiğin beş meyve</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="160" name="j3d"
                                                        value="Evet">
                                                    <label for="160"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="161" name="j3d"
                                                        value="Hayır">
                                                    <label for="161"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j3d_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">e</div>
                                            <div class="col-11 col-md-3">Hangi hayvanlar et yer</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="1616" name="j3e"
                                                        value="Evet">
                                                    <label for="1616"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="162" name="j3e"
                                                        value="Hayır">
                                                    <label for="162"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j3e_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">f</div>
                                            <div class="col-11 col-md-3">Deniz taşıtlarını say</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="163" name="j3f"
                                                        value="Evet">
                                                    <label for="163"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="164" name="j3f"
                                                        value="Hayır">
                                                    <label for="164"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j3f_notes">
                                            </div>
                                        </div>

                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center font-weight-bold text-danger">g</div>
                                            <div class="col-11 col-md-3">Neyle duyarız</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="165" name="j3g"
                                                        value="Evet">
                                                    <label for="165"
                                                        class="form-check-label text-success font-weight-bold">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" id="166" name="j3g"
                                                        value="Hayır">
                                                    <label for="166"
                                                        class="form-check-label text-danger font-weight-bold">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="j3g_notes">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- K -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseK">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    K - Kavram Ayırt Etme
                                </h4>
                            </div>
                        </a>
                        <div id="collapseK" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning">
                                        <div class="row">
                                            <div class="col-1">
                                                <span class="font-weight-bold">1</span>
                                            </div>
                                            <div class="col-11 col-md-2">
                                                <span class="font-weight-bold">Kavram Kartları</span>
                                            </div>
                                            <div class="col-2 d-none d-md-block">
                                                <span class="font-weight-bold float-right">Tanıma</span>
                                            </div>
                                            <div class="col-2 d-none d-md-block">
                                                <span class="font-weight-bold float-right">Adlandırma</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center">
                                                <span class="text-danger font-weight-bold">a</span>
                                            </div>
                                            <div class="col-11 col-md-2">Köpek</div>
                                            <div class="col-12 col-md-2">
                                                <span class="d-md-none font-weight-bold">Tanıma</span>
                                                <span class="float-right">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tanima_k1a"
                                                            id="k1a_tanima_E" value="Evet">
                                                        <label class="form-check-label text-success font-weight-bold"
                                                            for="k1a_tanima_E">Evet</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tanima_k1a"
                                                            id="k1a_tanima_H" value="Hayır">
                                                        <label class="form-check-label text-danger font-weight-bold"
                                                            for="k1a_tanima_H">Hayır</label>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <span class="d-md-none font-weight-bold">Adlandırma</span>
                                                <span class="float-right">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="adlandirma_k1a" id="k1a_adlandirma_E" value="Evet">
                                                        <label class="form-check-label text-success font-weight-bold"
                                                            for="k1a_adlandirma_E">Evet</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="adlandirma_k1a" id="k1a_adlandirma_H" value="Hayır">
                                                        <label class="form-check-label text-danger font-weight-bold"
                                                            for="k1a_adlandirma_H">Hayır</label>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="col-12 col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="k1a_description">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center">
                                                <span class="text-danger font-weight-bold">b</span>
                                            </div>
                                            <div class="col-11 col-md-2">Balık</div>
                                            <div class="col-12 col-md-2">
                                                <span class="d-md-none font-weight-bold">Tanıma</span>
                                                <span class="float-right">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tanima_k1b"
                                                            id="k1b_tanima_E" value="Evet">
                                                        <label class="form-check-label text-success font-weight-bold"
                                                            for="k1b_tanima_E">Evet</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tanima_k1b"
                                                            id="k1b_tanima_H" value="Hayır">
                                                        <label class="form-check-label text-danger font-weight-bold"
                                                            for="k1b_tanima_H">Hayır</label>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <span class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1b"
                                                            id="k1b_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1b_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1b"
                                                            id="k1b_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1b_adlandirma_H">Hayır</label></div>
                                                </span>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k1b_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">c</span></div>
                                            <div class="col-11 col-md-2">Ayakkabı</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1c"
                                                            id="k1c_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1c_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1c"
                                                            id="k1c_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1c_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1c"
                                                            id="k1c_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1c_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1c"
                                                            id="k1c_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1c_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k1c_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">d</span></div>
                                            <div class="col-11 col-md-2">Muz</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1d"
                                                            id="k1d_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1d_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1d"
                                                            id="k1d_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1d_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1d"
                                                            id="k1d_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1d_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1d"
                                                            id="k1d_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1d_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k1d_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">e</span></div>
                                            <div class="col-11 col-md-2">Sandalye</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1e"
                                                            id="k1e_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1e_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1e"
                                                            id="k1e_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1e_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1e"
                                                            id="k1e_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1e_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1e"
                                                            id="k1e_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1e_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k1e_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">f</span></div>
                                            <div class="col-11 col-md-2">Top</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1f"
                                                            id="k1f_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1f_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1f"
                                                            id="k1f_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1f_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1f"
                                                            id="k1f_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1f_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1f"
                                                            id="k1f_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1f_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k1f_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">g</span></div>
                                            <div class="col-11 col-md-2">Kamyon</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1g"
                                                            id="k1g_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1g_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1g"
                                                            id="k1g_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1g_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1g"
                                                            id="k1g_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1g_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1g"
                                                            id="k1g_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1g_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k1g_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">h</span></div>
                                            <div class="col-11 col-md-2">Bıçak</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1h"
                                                            id="k1h_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1h_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k1h"
                                                            id="k1h_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1h_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1h"
                                                            id="k1h_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k1h_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k1h"
                                                            id="k1h_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k1h_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k1h_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning">
                                        <div class="row">
                                            <div class="col-1"><span class="font-weight-bold">2</span></div>
                                            <div class="col-11 col-md-2"><span class="font-weight-bold">Vücut
                                                    Bölümleri</span></div>
                                            <div class="col-2 d-none d-md-block"><span
                                                    class="font-weight-bold float-right">Tanıma</span></div>
                                            <div class="col-2 d-none d-md-block"><span
                                                    class="font-weight-bold float-right">Adlandırma</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">a</span></div>
                                            <div class="col-11 col-md-2">El</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2a"
                                                            id="k2a_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2a_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2a"
                                                            id="k2a_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2a_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2a"
                                                            id="k2a_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2a_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2a"
                                                            id="k2a_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2a_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k2a_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">b</span></div>
                                            <div class="col-11 col-md-2">Saç</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2b"
                                                            id="k2b_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2b_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2b"
                                                            id="k2b_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2b_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2b"
                                                            id="k2b_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2b_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2b"
                                                            id="k2b_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2b_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k2b_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">c</span></div>
                                            <div class="col-11 col-md-2">Burun</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2c"
                                                            id="k2c_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2c_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2c"
                                                            id="k2c_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2c_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2c"
                                                            id="k2c_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2c_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2c"
                                                            id="k2c_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2c_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k2c_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">d</span></div>
                                            <div class="col-11 col-md-2">Göz</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2d"
                                                            id="k2d_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2d_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2d"
                                                            id="k2d_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2d_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2d"
                                                            id="k2d_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2d_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2d"
                                                            id="k2d_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2d_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k2d_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">e</span></div>
                                            <div class="col-11 col-md-2">Kulak</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2e"
                                                            id="k2e_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2e_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2e"
                                                            id="k2e_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2e_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2e"
                                                            id="k2e_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2e_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2e"
                                                            id="k2e_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2e_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k2e_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">f</span></div>
                                            <div class="col-11 col-md-2">Ağız</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2f"
                                                            id="k2f_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2f_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k2f"
                                                            id="k2f_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2f_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2f"
                                                            id="k2f_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k2f_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k2f"
                                                            id="k2f_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k2f_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k2f_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning">
                                        <div class="row">
                                            <div class="col-1"><span class="font-weight-bold">3</span></div>
                                            <div class="col-11 col-md-2"><span class="font-weight-bold">Renkler</span>
                                            </div>
                                            <div class="col-2 d-none d-md-block"><span
                                                    class="font-weight-bold float-right">Tanıma</span></div>
                                            <div class="col-2 d-none d-md-block"><span
                                                    class="font-weight-bold float-right">Adlandırma</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">a</span></div>
                                            <div class="col-11 col-md-2">Kırmızı</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3a"
                                                            id="k3a_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3a_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3a"
                                                            id="k3a_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3a_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3a"
                                                            id="k3a_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3a_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3a"
                                                            id="k3a_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3a_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k3a_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">b</span></div>
                                            <div class="col-11 col-md-2">Mavi</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3b"
                                                            id="k3b_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3b_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3b"
                                                            id="k3b_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3b_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3b"
                                                            id="k3b_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3b_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3b"
                                                            id="k3b_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3b_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k3b_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">c</span></div>
                                            <div class="col-11 col-md-2">Sarı</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3c"
                                                            id="k3c_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3c_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3c"
                                                            id="k3c_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3c_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3c"
                                                            id="k3c_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3c_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3c"
                                                            id="k3c_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3c_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k3c_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">d</span></div>
                                            <div class="col-11 col-md-2">Yeşil</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3d"
                                                            id="k3d_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3d_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3d"
                                                            id="k3d_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3d_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3d"
                                                            id="k3d_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3d_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3d"
                                                            id="k3d_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3d_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k3d_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">e</span></div>
                                            <div class="col-11 col-md-2">Siyah</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3e"
                                                            id="k3e_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3e_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3e"
                                                            id="k3e_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3e_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3e"
                                                            id="k3e_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3e_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3e"
                                                            id="k3e_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3e_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k3e_description"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">f</span></div>
                                            <div class="col-11 col-md-2">Beyaz</div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Tanıma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3f"
                                                            id="k3f_tanima_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3f_tanima_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="tanima_k3f"
                                                            id="k3f_tanima_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3f_tanima_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-2"><span
                                                    class="d-md-none font-weight-bold">Adlandırma</span><span
                                                    class="float-right">
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3f"
                                                            id="k3f_adlandirma_E" value="Evet"><label
                                                            class="form-check-label text-success font-weight-bold"
                                                            for="k3f_adlandirma_E">Evet</label></div>
                                                    <div class="form-check form-check-inline"><input
                                                            class="form-check-input" type="radio" name="adlandirma_k3f"
                                                            id="k3f_adlandirma_H" value="Hayır"><label
                                                            class="form-check-label text-danger font-weight-bold"
                                                            for="k3f_adlandirma_H">Hayır</label></div>
                                                </span></div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="k3f_description"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- L -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseL">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    L - Soru Cevaplama
                                </h4>
                            </div>
                        </a>
                        <div id="collapseL" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning "><span class="font-weight-bold">1 Alıcı Dil / İfade
                                            Edici Dil</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">a</span></div>
                                            <div class="col-11 col-md-3">Adın ne?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1a" id="l1a_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1a_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1a" id="l1a_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1a_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1a_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">b</span></div>
                                            <div class="col-11 col-md-3">Kaç yaşındasın?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1b" id="l1b_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1b_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1b" id="l1b_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1b_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1b_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">c</span></div>
                                            <div class="col-11 col-md-3">Annenin adı ne?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1c" id="l1c_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1c_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1c" id="l1c_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1c_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1c_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">d</span></div>
                                            <div class="col-11 col-md-3">Babanın adı ne?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1d" id="l1d_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1d_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1d" id="l1d_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1d_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1d_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">e</span></div>
                                            <div class="col-11 col-md-3">Nerede oturuyorsun?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1e" id="l1e_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1e_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1e" id="l1e_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1e_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1e_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">f</span></div>
                                            <div class="col-11 col-md-3">Nasılsın</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1f" id="l1f_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1f_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1f" id="l1f_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1f_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1f_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">g</span></div>
                                            <div class="col-11 col-md-3">Bugün günlerden ne?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1g" id="l1g_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1g_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1g" id="l1g_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1g_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1g_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">h</span></div>
                                            <div class="col-11 col-md-3">Sen bir erkek/kız mısın</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1h" id="l1h_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1h_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1h" id="l1h_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1h_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1h_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">i</span></div>
                                            <div class="col-11 col-md-3">Kardeşin var mı? Adı ne?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1i" id="l1i_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l1i_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l1i" id="l1i_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l1i_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l1i_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning "><span class="font-weight-bold">2 Mantık
                                            Soruları</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">a</span></div>
                                            <div class="col-11 col-md-3">Balona kalem batırılırsa ne olur?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2a" id="l2a_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l2a_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2a" id="l2a_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l2a_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l2a_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">b</span></div>
                                            <div class="col-11 col-md-3">Suyu buzluğa koyarsak ne olur?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2b" id="l2b_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l2b_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2b" id="l2b_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l2b_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l2b_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">c</span></div>
                                            <div class="col-11 col-md-3">Dondurmayı güneşte bırakırsak ne olur?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2c" id="l2c_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l2c_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2c" id="l2c_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l2c_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l2c_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">d</span></div>
                                            <div class="col-11 col-md-3">Hasta olan biri ne yapar?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2d" id="l2d_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l2d_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2d" id="l2d_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l2d_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l2d_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">e</span></div>
                                            <div class="col-11 col-md-3">Bebekler neden ağlar</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2e" id="l2e_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l2e_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l2e" id="l2e_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l2e_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l2e_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning "><span class="font-weight-bold">3 "N"li
                                            sorular</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">a</span></div>
                                            <div class="col-11 col-md-3">Neden yağmurda şemsiye kullanılır?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3a" id="l3a_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l3a_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3a" id="l3a_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l3a_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l3a_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">b</span></div>
                                            <div class="col-11 col-md-3">Neden kışın mont giyeriz?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3b" id="l3b_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l3b_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3b" id="l3b_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l3b_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l3b_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">c</span></div>
                                            <div class="col-11 col-md-3">Neden kuşların kanadı vardır?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3c" id="l3c_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l3c_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3c" id="l3c_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l3c_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l3c_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">d</span></div>
                                            <div class="col-11 col-md-3">Neden saate bakarız?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3d" id="l3d_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l3d_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3d" id="l3d_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l3d_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l3d_description"></div>
                                        </div>
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-1 text-center"><span
                                                    class="text-danger font-weight-bold">e</span></div>
                                            <div class="col-11 col-md-3">Neden insanlar gözlük takar?</div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3e" id="l3e_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="l3e_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="l3e" id="l3e_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="l3e_H">Hayır</label></div>
                                            </div>
                                            <div class="col-12 col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="l3e_description"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- M -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseM">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    M - Sosyal Etkileşim
                                </h4>
                            </div>
                        </a>
                        <div id="collapseM" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning">
                                        <span class="font-weight-bold">1 Sosyal bakışı var</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="m1" id="m1_E"
                                                        value="Evet">
                                                    <label class="form-check-label text-success font-weight-bold"
                                                        for="m1_E">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="m1" id="m1_H"
                                                        value="Hayır">
                                                    <label class="form-check-label text-danger font-weight-bold"
                                                        for="m1_H">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="m1_description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning">
                                        <span class="font-weight-bold">2 Paralel vakit geçirir</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="m2" id="m2_E"
                                                        value="Evet">
                                                    <label class="form-check-label text-success font-weight-bold"
                                                        for="m2_E">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="m2" id="m2_H"
                                                        value="Hayır">
                                                    <label class="form-check-label text-danger font-weight-bold"
                                                        for="m2_H">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="m2_description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning">
                                        <span class="font-weight-bold">3 Verilen nesneleri alır</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="m3" id="m3_E"
                                                        value="Evet">
                                                    <label class="form-check-label text-success font-weight-bold"
                                                        for="m3_E">Evet</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="m3" id="m3_H"
                                                        value="Hayır">
                                                    <label class="form-check-label text-danger font-weight-bold"
                                                        for="m3_H">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar"
                                                    name="m3_description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">4 Sosyal etkileşim
                                            başlatır</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="m4" id="m4_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="m4_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="m4" id="m4_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="m4_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="m4_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">5 Ortak dikkatini
                                            verir</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="m5" id="m5_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="m5_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="m5" id="m5_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="m5_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="m5_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">6 İletişim
                                            başlatır</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="m6" id="m6_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="m6_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="m6" id="m6_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="m6_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="m6_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">7 Oyunlarda işbirliği
                                            yapar (örneğin, eğitimci hadi bunu / böyle oynayalım dediğinde yapar)</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="m7" id="m7_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="m7_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="m7" id="m7_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="m7_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="m7_description"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- N -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseN">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    N - Alıcı Dil
                                </h4>
                            </div>
                        </a>
                        <div id="collapseN" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">1 Adına tepki
                                            verir</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="n1" id="n1_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="n1_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="n1" id="n1_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="n1_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="n1_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">2 Tek basamaklı
                                            yönergeleri uygular</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="n2" id="n2_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="n2_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="n2" id="n2_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="n2_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="n2_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">3 İki basamaklı
                                            yönergeleri uygular</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="n3" id="n3_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="n3_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="n3" id="n3_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="n3_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="n3_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">4 Etkinlik içi/dışı
                                            yönergeleri uygular</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="n4" id="n4_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="n4_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="n4" id="n4_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="n4_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="n4_description"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- O -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseO">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    O - Öz Bakım Becerileri
                                </h4>
                            </div>
                        </a>
                        <div id="collapseO" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">1 Giyinme (Anneye
                                            sorunuz)</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="o1" id="o1_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="o1_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="o1" id="o1_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="o1_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="o1_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">2 Soyunma (Anneye
                                            sorunuz)</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="o2" id="o2_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="o2_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="o2" id="o2_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="o2_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="o2_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">3 Tuvalet (Anneye
                                            sorunuz)</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="o3" id="o3_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="o3_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="o3" id="o3_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="o3_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="o3_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">4 Kişisel bakım
                                            (Anneye sorunuz)</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="o4" id="o4_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="o4_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="o4" id="o4_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="o4_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="o4_description"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- P -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseP">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    P - Yeme, İçme, Uyku
                                </h4>
                            </div>
                        </a>
                        <div id="collapseP" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">1 Yeme - İçme (Anneye
                                            sorunuz)</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="p1" id="p1_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="p1_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="p1" id="p1_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="p1_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="p1_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">2 Uyku (Anneye
                                            sorunuz)</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="p2" id="p2_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="p2_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="p2" id="p2_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="p2_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="p2_description"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- R -->
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseR">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    R - Problem Davranış Sergileme
                                </h4>
                            </div>
                        </a>
                        <div id="collapseR" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">1 Sözel (bağırma,
                                            kızma, tükürme) (Anneye sorunuz)</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="r1" id="r1_E"
                                                        value="Evet"><label
                                                        class="form-check-label text-success font-weight-bold"
                                                        for="r1_E">Evet</label></div>
                                                <div class="form-check form-check-inline"><input
                                                        class="form-check-input" type="radio" name="r1" id="r1_H"
                                                        value="Hayır"><label
                                                        class="form-check-label text-danger font-weight-bold"
                                                        for="r1_H">Hayır</label></div>
                                            </div>
                                            <div class="col-md-5"><input type="text" class="form-control inline"
                                                    placeholder="Notlar" name="r1_description"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning"><span class="font-weight-bold">2 Vurma, saldırma
                                            (Anneye sorunuz)</span></div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="r2" id="r2_E" value="Evet">
                                                    <label class="form-check-label text-success font-weight-bold" for="r2_E">
                                                        Evet
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="r2" id="r2_H" value="Hayır">
                                                        <label class="form-check-label text-danger font-weight-bold" for="r2_H">
                                                        Hayır
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar" name="r2_description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-warning">
                                        <span class="font-weight-bold">
                                            3 Gülme (karşısındakini sinirlendirmek isteme) (Anneye sorunuz)
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-2 mt-2">
                                            <div class="col-1 col-md-4 text-center"></div>
                                            <div class="col-12 col-md-3 d-flex justify-content-between d-md-block">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="r3" id="r3_E" value="Evet">
                                                    <label class="form-check-label text-success font-weight-bold" for="r3_E">
                                                        Evet
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="r3" id="r3_H" value="Hayır">
                                                    <label class="form-check-label text-danger font-weight-bold" for="r3_H">Hayır</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control inline" placeholder="Notlar" name="r3_description">
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
                </div>
            </div>
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