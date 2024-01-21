@extends("layouts.app")
@section("content")
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Öğrenci Bilgilerini Düzenle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Öğrenciler</a></li>
                        <li class="breadcrumb-item active">Düzenle</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
    
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <div class="card-body">
                <div id="accordion">
                    <form method="POST" action="{{ route('students.update', ['student' => $student->id]) }}">

                        @csrf
                        @method("PUT")
                        <input type="submit" class="btn btn-warning text-bold btn-lg mb-2" value="Kaydet"></input>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">Öğrenci Bilgileri</a>
                            </h4>
                        </div>
                        
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="register_date">Kayıt Tarihi</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="register_date" name="register_date" value="{{$student['register_date']}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="tc">T.C. Kimlik No</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="tc" name="tc" value="{{$student['tc']}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="student_name">Adı Soyadı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="name" name="name" value="{{$student['name']}}">
                                            </div>                                
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="pob">Doğum Yeri</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="pob" name="pob" value="{{$student['pob']}}">
                                            </div>                                
                                        </div>

                            
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="dob">Doğum Tarihi</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="dob" name="dob"
                                                value="{{$student['dob']}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="height">Boy</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="height" name="height" value="{{$student['height']}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="weigth">Kilo</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="weigth" name="weigth" value="{{$student['weight']}}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="stays_at">Kiminle Oturuyor</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="stays_at" name="stays_at" value="{{$student['stays_at']}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="blood">Kan Grubu</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="blood" name="blood" value="{{$student['blood']}}">
                                            </div>
                                        </div>
                            
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="diagnoses">Tanısı</label>
                                            @php $arr = explode(",",$student['diagnoses']); @endphp
                                            <div class="col-sm-9">
                                                <select class="select2 form-control d-inline" id="diagnoses" name="diagnoses[]" data-placeholder="Tanı seçin" data-dropdown-css-class="select2-purple" style="width: 100%;" multiple="multiple">
                                                    <option @if (array_search("Zihin",$arr)===0 || array_search("Zihin",$arr)>= "1") selected @endif value="Zihin">Zihin</option>
                                                    <option @if (array_search("Bedensel",$arr)>="1" || array_search("Bedensel",$arr)===0) selected @endif value="Bedensel">Bedensel </option>
                                                    <option @if (array_search("Otizm",$arr)===0 || array_search("Otizm",$arr)>="1") selected @endif value="Otizm">Otizm</option>
                                                    <option @if (array_search("DKB",$arr)===0 || array_search("DKB",$arr)>= "1") selected @endif value="DKB">DKB</option>
                                                    <option @if (array_search("Öğrenme Güçlüğü",$arr)===0 || array_search("Öğrenme Güçlüğü",$arr)>= "1") selected @endif value="Öğrenme Güçlüğü">Öğrenme Güçlüğü</option>
                                                </select>
                                            </div>                                            
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="gender">Cinsiyeti</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select form-control rounded-0" id="gender" name="gender">
                                                    <option value="0"></option>
                                                    <option @if ($student['gender']=="Kız" ) selected @endif value="Kız">Kız</option>
                                                    <option @if ($student['gender']=="Erkek" ) selected @endif value="Erkek">Erkek</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="siblings">Kardeş Sayısı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="siblings" name="siblings" value="{{$student['siblings']}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="status">Eğitim Tipi</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" id="status" name="status" required>
                                                    <option @if ($student['status']=="0" ) selected @endif value="0"></option>
                                                    <option @if ($student['status']=="Danışan" ) selected @endif value="Danışan">Danışan</option>
                                                    <option @if ($student['status']=="Raporlu" ) selected @endif value="Raporlu">Raporlu</option>
                                                    <option @if ($student['status']=="Özel" ) selected @endif value="Özel">Özel</option>
                                                    <option @if ($student['status']=="Ücretsiz" ) selected @endif value="Ücretsiz">Ücretsiz</option>
                                                    <option @if ($student['status']=="Rapor Bekliyor" ) selected @endif value="Rapor Bekliyor">Rapor Bekliyor</option>
                                                    <option @if ($student['status']=="Ayrıldı" ) selected @endif value="Ayrıldı">Ayrıldı</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="lessons">Ders Durumu</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" id="lessons" name="lessons">
                                                    <option @if ($student['lessons']=="0" ) selected @endif value="0"></option>
                                                    <option @if ($student['lessons']=="Bireysel" ) selected @endif value="Bireysel">Bireysel</option>
                                                    <option @if ($student['lessons']=="Grup" ) selected @endif value="Grup">Grup</option>
                                                    <option @if ($student['lessons']=="Bireysel, Grup" ) selected @endif value="Bireysel, Grup">Bireysel, Grup</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="lessons">Adres</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="address" name="address" placeholder="Adres" value="{{$student['address']}}">
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card card-success">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">Anne - Baba Bilgileri</a>
                            </h4>
                        </div>

                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4>Baba Bilgileri</h4>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_name">Adı Soyadı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_name" name="father_name" @if(isset($father[0]['father_name'])) value="{{$father[0]['father_name']}} @endif">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_tc">TC Kimlik No</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_tc" name="father_tc" @if(isset($father[0]['father_tc'])) value="{{$father[0]['father_tc']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_school">Öğrenim Durumu</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_school" name="father_school" @if(isset($father[0]['father_school'])) value="{{$father[0]['father_school']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_job">Mesleği</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_job" name="father_job" @if(isset($father[0]['father_job'])) value="{{$father[0]['father_job']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_email">Eposta Adresi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_email" name="father_email" @if(isset($father[0]['father_email'])) value="{{$father[0]['father_email']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_is_alive">Sağ / Ölü</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_is_alive" name="father_is_alive" @if(isset($father[0]['father_is_alive'])) value="{{$father[0]['father_is_alive']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_is_together">Birlikte / Ayrı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_is_together" name="father_is_together" @if(isset($father[0]['father_is_together'])) value="{{$father[0]['father_is_together']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_illness">Sürekli Hastalığı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_illness" name="father_illness" @if(isset($father[0]['father_illness'])) value="{{$father[0]['father_illness']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_handicaped">Engel Durumu</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_handicaped" name="father_handicaped" @if(isset($father[0]['father_handicaped'])) value="{{$father[0]['father_handicaped']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_phone_home">Ev Telefon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_phone_home" name="father_phone_home" @if(isset($father[0]['father_phone_home'])) value="{{$father[0]['father_phone_home']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_phone_work">İş Telefon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_phone_work" name="father_phone_work" @if(isset($father[0]['father_phone_work'])) value="{{$father[0]['father_phone_work']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_phone_cell">Cep Telefon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="father_phone_cell" name="father_phone_cell" @if(isset($father[0]['father_phone_cell'])) value="{{$father[0]['father_phone_cell']}} @endif">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <h4>Anne Bilgileri</h4>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_name">Adı Soyadı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_name" name="mother_name" @if(isset($mother['mother_name'])) value="{{$mother['mother_name']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_tc">TC Kimlik No</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_tc" name="mother_tc" @if(isset($mother['mother_tc'])) value="{{$mother['mother_tc']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_school">Öğrenim Durumu</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_school" name="mother_school" @if(isset($mother['mother_school'])) value="{{$mother['mother_school']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_job">Mesleği</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_job" name="mother_job" @if(isset($mother['mother_job'])) value="{{$mother['mother_job']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_email">Eposta Adresi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_email" name="mother_email" @if(isset($mother['mother_email'])) value="{{$mother['mother_email']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_is_alive">Sağ / Ölü</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_is_alive" name="mother_is_alive" @if(isset($mother['mother_is_alive'])) value="{{$mother['mother_is_alive']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_is_together">Birlikte / Ayrı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_is_together" name="mother_is_together" @if(isset($mother['mother_is_together'])) value="{{$mother['mother_is_together']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_illness">Sürekli Hastalığı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_illness" name="mother_illness" @if(isset($mother['mother_illness'])) value="{{$mother['mother_illness']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_handicaped">Engel Durumu</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_handicaped" name="mother_handicaped" @if(isset($mother['mother_handicaped'])) value="{{$mother['mother_handicaped']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_phone_home">Ev Telefon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_phone_home" name="mother_phone_home" @if(isset($mother['mother_phone_home'])) value="{{$mother['mother_phone_home']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_phone_work">İş Telefon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_phone_work" name="mother_phone_work" @if(isset($mother['mother_phone_work'])) value="{{$mother['mother_phone_work']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_phone_cell">Cep Telefon</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="mother_phone_cell" name="mother_phone_cell" @if(isset($mother['mother_phone_cell'])) value="{{$mother['father_phone_cell']}} @endif">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

@section("scripts")
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

<script>
$('.select2').select2()
</script>
@endsection

@section("css")
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection