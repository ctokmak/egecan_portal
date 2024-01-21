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
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>TC</th>
                        <th>Öğrenci</th>
                        <th>Değerlendirme</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    
                    <tr>
                        <td>{{$student->tc}}</td>
                        <td>{{$student->name}}</td>
                        @if(
                            $student->find($student->id)->abllsr()->where('form_id','=','4')->where('record_id','=','1')->get()->isEmpty())
                        <td>
                            <button class="btn btn-sm btn-primary">Yeni Değerlendirme Yap</button>
                            <a href="/abbls/{{$student->id}}/1" class="ml-1 btn btn-sm btn-success">Göster</a></
                        </td>
                        @else
                        <td>
                            <button class="btn btn-sm btn-primary">Yeni Değerlendirme Yap</button>
                            <a href="/abbls/{{$student->id}}/1" class="ml-1 btn btn-sm btn-success">Göster</a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

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