@extends("layouts.app")
@section("content")
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Anasayfa</h1>
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
        <div class="container-fluid" style="height:90vh">
            <div class="row h-100">
                <div class="col-sm-12 col-lg-10 h-100" id="map"></div>
                <div class="col-sm-12 col-lg-2" id="sidebar">
                    <div>
                        <b>Öğrenciler:</b> <br />
                        <select class="form-select" multiple id="waypoints" size="10">
                            @foreach($students as $student)
                            <option value="{{$student['address']}}">
                                {{$student->name}}
                            </option>
                            @endforeach
                        </select>
                        <br>
                        En fazla <b>25</b> öğrenci seçebilirsiniz
                        <br />

                        <input class="btn btn-primary" type="submit" id="submit" />
                    </div>
                    <div id="directions-panel"></div>
                    <div id="summary"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script>
    var students = {!! json_encode($students->toArray()) !!};
    
function initMap() {
    const directionsService = new google.maps.DirectionsService();
    const directionsRenderer = new google.maps.DirectionsRenderer();
    const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {
            lat: 40.25873352711825,
            lng: 29.006203969691715
        },
    });

    new google.maps.Marker({
        position: {
            lat: 40.25873352711825,
            lng: 29.006203969691715
        },
        map,
        label: 'Egecan',
    });

    students.forEach(element => {
        if (element.lat !== null || element.lng !== null) {
        new google.maps.Marker({
            position: {
                lat: parseFloat(element.lat) ,
                lng: parseFloat(element.lng) 
            },
            map,
            label: element.name,
        });    
        }
        
    });

    


    directionsRenderer.setMap(map);
    document.getElementById('submit').addEventListener('click', () => {
        calculateAndDisplayRoute(directionsService, directionsRenderer);
    });

    new google.maps.Circle({
        strokeColor: '#73ff00',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#73ff00',
        fillOpacity: 0.35,
        map,
        center: {
            lat: 40.25873352711825,
            lng: 29.006203969691715
        },
        radius: 5000,
    });

    new google.maps.Circle({
        strokeColor: '#ffbb00',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#ffbb00',
        fillOpacity: 0.35,
        map,
        center: {
            lat: 40.25873352711825,
            lng: 29.006203969691715
        },
        radius: 10000,
    });
}

function calculateAndDisplayRoute(directionsService, directionsRenderer) {
    const waypts = [];
    const checkboxArray = document.getElementById('waypoints');

    for (let i = 0; i < checkboxArray.length; i++) {
        if (checkboxArray.options[i].selected) {
            waypts.push({
                location: checkboxArray[i].value,
                stopover: true,
            });
        }
    }

    directionsService
        .route({
            origin: '40.25873352711825, 29.006203969691715',
            destination: '40.25873352711825, 29.006203969691715',
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: google.maps.TravelMode.DRIVING,
        })
        .then((response) => {
            directionsRenderer.setDirections(response);

            const route = response.routes[0];
            const summaryPanel = document.getElementById('directions-panel');
            const summary = document.getElementById('summary');

            summaryPanel.innerHTML = '';
            summary.innerHTML = '';
            let totalDistance = 0;
            let totalTime = 0;
            // For each route, display summary information.
            for (let i = 0; i < route.legs.length; i++) {
                const routeSegment = i + 1;

                totalDistance += route.legs[i].distance.value;
                totalTime += route.legs[i].duration.value;

                /* summaryPanel.innerHTML +=
                  '<b>Route Segment: ' + routeSegment + '</b><br>';
                summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>'; */
            }
            summary.innerHTML +=
                '<b>Toplam Mesafe: </b>' +
                (totalDistance / 1000).toFixed(2) +
                ' Km<br>';
            summary.innerHTML +=
                '<b>Toplam Süre: </b>' + (totalTime / 60).toFixed(0) + ' Dk';
        })
        .catch((e) => console.log(e));
}

window.initMap = initMap;
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB--bQJj33wkKnXe5GKawxxnStd496Y29c&callback=initMap&v=weekly">
</script>
<script
    src="https://maps.googleapis.com/maps/api/directionskey=AIzaSyB--bQJj33wkKnXe5GKawxxnStd496Y29c&callback=initMap&v=weekly">
</script>
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
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection