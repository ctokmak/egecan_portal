@extends("layouts.app")
@section("content")
@php
$html = "";
    function draw($name,$col,$colors=[]){
        $color1 = "";
        $color2 = "";
        $color3 = "";
        $color4 = "";



        if($col == "2" ) {
            switch ($colors[0][0]){
                case 0:
                    $color1="";
                    break;
                case 1:
                    $color1="bg-red";
                    break;
                case 2:
                    $color1="bg-yellow";
                    break;
            };
            switch ($colors[0][2]){
                case 0:
                    $color2="";
                    break;
                case 1:
                    $color2="bg-red";
                    break;
                case 2:
                    $color2="bg-yellow";
                    break;
            };




            $html = "
            <tr>
                <td>$name</td>
                <td>
                    <div style='display:flex'>
                        <div class='border $color1 border-dark' style='width:50px; height:25px;'></div>
                        <div class='border $color2 border-dark' style='width:50px; height:25px;'></div>
                    </div>
                </td>
            </tr>";
        } else {
            switch ($colors[0][0]){
                case 0:
                    $color1="";
                    break;
                case 1:
                    $color1="bg-red";
                    break;
                case 2:
                    $color1="bg-yellow";
                    break;
                case 3:
                    $color1="bg-blue";
                    break;
                case 4:
                    $color1="bg-green";
                    break;
            };
            switch ($colors[0][2]){
               case 0:
                    $color2="";
                    break;
                case 1:
                    $color2="bg-red";
                    break;
                case 2:
                    $color2="bg-yellow";
                    break;
                case 3:
                    $color2="bg-blue";
                    break;
                case 4:
                    $color2="bg-green";
                    break;
            };
            switch ($colors[0][4]){
               case 0:
                    $color3="";
                    break;
                case 1:
                    $color3="bg-red";
                    break;
                case 2:
                    $color3="bg-yellow";
                    break;
                case 3:
                    $color3="bg-blue";
                    break;
                case 4:
                    $color3="bg-green";
                    break;
            };

            switch ($colors[0][6]){
               case 0:
                    $color4="";
                    break;
                case 1:
                    $color4="bg-red";
                    break;
                case 2:
                    $color4="bg-yellow";
                    break;
                case 3:
                    $color4="bg-blue";
                    break;
                case 4:
                    $color4="bg-green";
                    break;
            };
            $html = "
            <tr>
                <td>$name</td>
                <td>
                    <div style='display:flex'>
                        <div class='border $color1 border-dark' style='width:25px; height:25px;'></div>
                        <div class='border $color2 border-dark' style='width:25px; height:25px;'></div>
                        <div class='border $color3 border-dark' style='width:25px; height:25px;'></div>
                        <div class='border $color4 border-dark' style='width:25px; height:25px;'></div>
                    </div>
                </td>
            </tr>";
        }
        echo $html;
    }
    function createTable($key, $title,$data)
{
    $values = $data[$key]->reverse();
    $scores = [
        'A'=>52,
        'B'=>96,
        'C'=>182,
        'D'=>80,
        'E'=>56,
        'F'=>74,
        'G'=>152,
        'H'=>184,
        'I'=>28,
        'J'=>44,
        'K'=>54,
        'L'=>80,
        'M'=>36,
        'N'=>24,
        'P'=>12,
        'Q'=>52,
        'R'=>76,
        'S'=>30,
        'T'=>18,
        'U'=>32,
        'V'=>20,
        'W'=>14,
        'X'=>24,
        'Y'=>30,
        'Z'=>28];
    $score = $data[$key.'rate'][0]->puan;
    $rate = round(($score / $scores[$key])*100,2).'%';
    
    echo '<table class="mr-5">';
    foreach($values as $index => $value){
        $a = explode(',',$value);
        draw($index, count($a), [$value]);
    }
    echo '<tr><td colspan=2><p class="text-center" style="font-size:12px; font-weight:bold">'.$title.'</p><div class="progress-group">İlerleme<span class="float-right"><b>'.$rate.'</b></span><div class="progress progress-sm"><div class="progress-bar bg-primary" style="width:'. $rate.'"></div></div></div></td></tr>';
    echo '</table>';
}
@endphp


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
        <div class="d-flex align-items-end">
            @php
                createTable('A', 'İşbirliği ve Pekiştirici Verimlilik', $plucked);
                createTable('B', 'Görsel Performans', $plucked);
                createTable('C', 'Alıcı Dil', $plucked);
                createTable('D', 'Taklit Etme', $plucked);
                createTable('E', 'Ses Taklit Etme', $plucked);
                createTable('F', 'İstekler', $plucked);
                createTable('G', 'Etiketleme', $plucked);
                createTable('H', 'İçsözel', $plucked);
                createTable('I', 'Spontane Seslendirme', $plucked);
                
            @endphp
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
<style>
    @media print {
    * {
        color: inherit !important;
        background: inherit !important;
    }
}
</style>

</head>
@endsection