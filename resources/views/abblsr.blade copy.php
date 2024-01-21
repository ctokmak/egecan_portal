@extends("layouts.app")
@section("content")

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1>ABLLS-R</h1>
                    <h4>TEMEL ÖĞRENME BECERİLERİ DEĞERLENDİRMESİ</h4>
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
        <form id="form" method="POST" action="{{ route('abbls.store') }}">
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
                    @foreach($bolumler as $bolum)
                    <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse{{$bolum->bolum_kodu}}">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    {{$bolum->bolum_kodu}} - {{$bolum->bolum_adi}}
                                </h4>
                            </div>
                        </a>
                        <div id="collapse{{$bolum->bolum_kodu}}" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                        @foreach($data as $item)
                                            @if($item->bolum_kodu === $bolum->bolum_kodu)
                                                @php
                                                    $items = json_decode($item->kriterler,true);
                                                @endphp
                                        <tr>
                                            <td>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h6 class="text-bold">{{"$item->gorev $item->gorev_adi"}}</h6>
                                                    <p class="text-muted">{{$item->gorev_hedefi}}</p>
                                                    <p>
                                                        @foreach($items[0] as $key => $value)                                                        
                                                        <div class='form-check'>
                                                            <input class='form-check-input' style="cursor:pointer" type='radio' name='{{$item->gorev}}[cevap]' id='{{$item->gorev}}.{{$key}}' value={{$key}}>
                                                            <label class='form-check-label' style="cursor:pointer" for='{{$item->gorev}}.{{$key}}'>
                                                                {{"$key - $value"}}
                                                            </label>                                                            
                                                        </div>
                                                        <input name="{{$item->gorev}}[soru]" type="hidden" value="{{$item->gorev}}">
                                                        <input name="{{$item->gorev}}[soru_sayisi]" type="hidden" value="{{count($items[0])}}">
                                                        @endforeach
                                                    </p>
                                                    <p class="text-green">{{$item->soru}}</p>
                                                </div>
                                                <div class="col-md-2">
                                                    <h6 class="text-bold">ÖRNEKLER</h6>
                                                    {{$item->ornekler}}
                                                </div>
                                            </div>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    

                    
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
<script src="{{asset('dist/js/star-rating.min.js')}}"></script>
<script>
    var starRatingControl = new StarRating('.star-rating',{
    tooltip: '',
});
</script>


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
<link rel="stylesheet" href="{{asset('dist/css/star-rating.css')}}">
</head>
@endsection