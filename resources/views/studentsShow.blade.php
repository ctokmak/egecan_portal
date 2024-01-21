<?php use Carbon\Carbon; ?>
@extends("layouts.app")
@section("content")
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="<?= asset($student->avatar) ?>" data-toggle="lightbox" data-title="{{$student['name']}}">
                                <img class="img-fluid" src="<?= asset($student->avatar) ?>" alt="User profile picture" style="width:200px; height:200px" />
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h1 class="d-inline ml-2">{{$student['name']}}</h1>
                            <br>
                            <form method="POST" enctype="multipart/form-data" id="image-upload" action="javascript:void(0)" >
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <span class="btn btn-success fileinput-button" id="OpenImgUpload">
                                            <i class="fas fa-plus"></i>
                                            <span onClick="getElementById('image').click()">Resim Seç</span>
                                        </span>
                                        <input hidden type="file" name="image" placeholder="Resim Seç" id="image">
                                        <button type="submit" class="btn btn-primary" id="submit">Resmi Kaydet</button>
                                        </div>
                                    </div>
                                </div>     
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Öğrenciler</a></li>
                        <li class="breadcrumb-item active">Göster</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('students.edit',['student'=>$student['id']])}}" class="btn btn-primary">Kaydı Düzenle</a>
                    <form id="sil" method="POST" action="{{route('students.destroy',['student'=>$student['id']])}}" class="d-inline-block">
                            @method("delete")
                            @csrf
                            <button type="submit" class="btn btn-danger">Kaydı Sil</button>
                            <script>
                                let btn = document.getElementById("sil")
                                btn.onsubmit = function() {
                                return confirm('Bu kaydı silmek istediğinize emin misiniz?');
                            }
                            </script>
                        </form>     
                </div>
                <div class="card-body">
                    <div id="accordion">
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
                                                    <input disabled type="date" class="form-control" id="register_date" name="register_date" value="{{$student['register_date']}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="tc">T.C. Kimlik No</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="tc" name="tc" value="{{$student['tc']}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="student_name">Adı Soyadı</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="name" name="name" value="{{$student['name']}}">
                                                </div>                                
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="pob">Doğum Yeri</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="pob" name="pob" value="{{$student['pob']}}">
                                                </div>                                
                                            </div>

                                
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="dob">Doğum Tarihi</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="date" class="form-control" id="dob" name="dob"
                                                    value="{{$student['dob']}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="height">Boy</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="height" name="height" value="{{$student['height']}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="weigth">Kilo</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="weigth" name="weigth" value="{{$student['weight']}}">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="stays_at">Kiminle Oturuyor</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="stays_at" name="stays_at" value="{{$student['stays_at']}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="blood">Kan Grubu</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="blood" name="blood" value="{{$student['blood']}}">
                                                </div>
                                            </div>
                                
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="diagnoses">Tanısı</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="diagnoses" name="diagnoses" value="{{$student['diagnoses']}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="gender">Cinsiyeti</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="gender" name="gender" value="{{$student['gender']}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="siblings">Kardeş Sayısı</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="siblings" name="siblings" value="{{$student['siblings']}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="status">Eğitim Tipi</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="status" name="status"
                                                    value="{{$student['status']}}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" for="lessons">Eğitim Durumu</label>
                                                <div class="col-sm-9">
                                                    <input disabled type="text" class="form-control" id="lessons" name="lessons" value="{{$student['lessons']}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="address">Adres</label>
                                            <input type="text" class="form-control" id="address" name="address" disabled placeholder="Adres" value="{{$student['address']}}">
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
                                                <input disabled type="text" class="form-control" id="father_name" name="father_name" @if(isset($father[0]['father_name'])) value="{{$father[0]['father_name']}} @endif">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_tc">TC Kimlik No</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_tc" name="father_tc" @if(isset($father[0]['father_tc'])) value="{{$father[0]['father_tc']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_school">Öğrenim Durumu</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_school" name="father_school" @if(isset($father[0]['father_school'])) value="{{$father[0]['father_school']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_job">Mesleği</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_job" name="father_job" @if(isset($father[0]['father_job'])) value="{{$father[0]['father_job']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_email">Eposta Adresi</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_email" name="father_email" @if(isset($father[0]['father_email'])) value="{{$father[0]['father_email']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_is_alive">Sağ / Ölü</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_is_alive" name="father_is_alive" @if(isset($father[0]['father_is_alive'])) value="{{$father[0]['father_is_alive']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_is_together">Birlikte / Ayrı</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_is_together" name="father_is_together" @if(isset($father[0]['father_is_together'])) value="{{$father[0]['father_is_together']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_illness">Sürekli Hastalığı</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_illness" name="father_illness" @if(isset($father[0]['father_illness'])) value="{{$father[0]['father_illness']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_handicaped">Engel Durumu</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_handicaped" name="father_handicaped" @if(isset($father[0]['father_handicaped'])) value="{{$father[0]['father_handicaped']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_phone_home">Ev Telefon</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_phone_home" name="father_phone_home" @if(isset($father[0]['father_phone_home'])) value="{{$father[0]['father_phone_home']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_phone_work">İş Telefon</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_phone_work" name="father_phone_work" @if(isset($father[0]['father_phone_work'])) value="{{$father[0]['father_phone_work']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="father_phone_cell">Cep Telefon</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="father_phone_cell" name="father_phone_cell" @if(isset($father[0]['father_phone_cell'])) value="{{$father[0]['father_phone_cell']}} @endif">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <h4>Anne Bilgileri</h4>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_name">Adı Soyadı</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_name" name="mother_name" @if(isset($mother[0]['mother_name'])) value="{{$mother[0]['mother_name']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_tc">TC Kimlik No</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_tc" name="mother_tc" @if(isset($mother[0]['mother_tc'])) value="{{$mother[0]['mother_tc']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_school">Öğrenim Durumu</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_school" name="mother_school" @if(isset($mother[0]['mother_school'])) value="{{$mother[0]['mother_school']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_job">Mesleği</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_job" name="mother_job" @if(isset($mother[0]['mother_job'])) value="{{$mother[0]['mother_job']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_email">Eposta Adresi</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_email" name="mother_email" @if(isset($mother[0]['mother_email'])) value="{{$mother[0]['mother_email']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_is_alive">Sağ / Ölü</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_is_alive" name="mother_is_alive" @if(isset($mother[0]['mother_is_alive'])) value="{{$mother[0]['mother_is_alive']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_is_together">Birlikte / Ayrı</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_is_together" name="mother_is_together" @if(isset($mother[0]['mother_is_together'])) value="{{$mother[0]['mother_is_together']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_illness">Sürekli Hastalığı</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_illness" name="mother_illness" @if(isset($mother[0]['mother_illness'])) value="{{$mother[0]['mother_illness']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_handicaped">Engel Durumu</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_handicaped" name="mother_handicaped" @if(isset($mother[0]['mother_handicaped'])) value="{{$mother[0]['mother_handicaped']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_phone_home">Ev Telefon</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_phone_home" name="mother_phone_home" @if(isset($mother[0]['mother_phone_home'])) value="{{$mother[0]['mother_phone_home']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_phone_work">İş Telefon</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_phone_work" name="mother_phone_work" @if(isset($mother[0]['mother_phone_work'])) value="{{$mother[0]['mother_phone_work']}} @endif">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="mother_phone_cell">Cep Telefon</label>
                                            <div class="col-sm-9">
                                                <input disabled type="text" class="form-control" id="mother_phone_cell" name="mother_phone_cell" @if(isset($mother[0]['mother_phone_cell'])) value="{{$mother[0]['mother_phone_cell']}} @endif">
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
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">Formlar</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    @if(count($forms[0]))
                                    <li>Aile Görüşme Formu</li>
                                    <ul>
                                        @foreach($forms[0] as $form)
                                        <li>
                                            <a href="/forms/1/{{$form->record_id}}">{{Carbon::parse($form->record_date)->isoFormat('DD MMM YYYY')}} / {{$form->record_id}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    @if(count($forms[1]))
                                    <li>Gelişim Değerlendirme Formu</li>
                                    <ul>
                                        @foreach($forms[1] as $form)
                                        <li>
                                            <a href="/gelisimdegerlendirme/{{$student['id']}}/{{$form->record_id}}">{{Carbon::parse($form->record_date)->isoFormat('DD MMM YYYY')}} / {{$form->record_id}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    @if(count($forms[2]))
                                    <li>Bedensel Performans Değerlendirme Formu</li>
                                    <ul>
                                        @foreach($forms[2] as $form)
                                        <li>
                                            <a href="/bedenselperformans/{{$form->record_id}}">{{Carbon::parse($form->record_date)->isoFormat('DD MMM YYYY')}} / {{$form->record_id}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    @if(count($forms[3]))
                                    <li>Duyu Değerlendirme Formu</li>
                                    <ul>
                                        @foreach($forms[4] as $form)
                                        <li>
                                            <a href="/forms/4/{{$form->record_id}}">{{Carbon::parse($form->record_date)->isoFormat('DD MMM YYYY')}} / {{$form->record_id}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    @if(count($forms[4]))
                                    <li>ABLLS-R</li>
                                    <ul>
                                        @foreach($forms[4] as $form)
                                        <li>
                                            <a href="/forms/5/{{$form->record_id}}">{{Carbon::parse($form->record_date)->isoFormat('DD MMM YYYY')}} / {{$form->record_id}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
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
<script src="{{asset('plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>

<script>
$('.select2').select2()
</script>
<script>
$(function() {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });
})
</script>

<script type="text/javascript">
$(document).ready(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('#image').change(function(){
        let reader = new FileReader();
        reader.readAsDataURL(this.files[0]); 
    });



    $('#image-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('students/image/upload')}}"+"/"+<?=$student['id']?>,
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    location.reload();
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
        });
</script>



<script src="{{ asset('js/app.js') }}" defer></script>
@endsection

@section("css")
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

<link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
@endsection