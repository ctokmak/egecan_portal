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
                        <li class="breadcrumb-item active">Ders Programı</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Small Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="student">Öğrenci</label>
                        <select class="custom-select rounded-0" id="student" name="student" required>
                            <option value="0"></option>
                            @foreach($students as $student)
                            <option value="{{$student['id']}}">{{$student['name']}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="teacher">Öğretmen</label>
                        <select class="custom-select rounded-0" id="teacher" name="teacher" required>
                            <option value="0"></option>
                            @foreach($teachers as $teacher)
                            <option value="{{$teacher['id']}}">{{$teacher['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="time">Saat</label>
                        <select class="custom-select rounded-0" id="time" name="time" required>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type">Tip</label>
                        <select class="custom-select rounded-0" id="type" name="type" required>
                            <option value="Bireysel">Bireysel</option>
                            <option value="Grup">Grup</option>
                            <option value="Duyu">Duyu</option>
                            <option value="Telafi">Telafi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="notes">Notlar</label>
                        <input type="text" name="notes" id="notes" class="form-control">
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="saveBtn" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8  mx-auto">
                    <div class="card card-primary">
                        <div class="card-body p-0">
                            <!-- THE CALENDAR -->
                            <div id="calendar" style="height:75vh"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
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
<!-- fullCalendar 2.2.5 -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/main.js')}}"></script>
<script src="{{asset('fullcalendar/lang/tr.js')}}"></script>
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src='https://unpkg.com/popper.js/dist/umd/popper.min.js'></script>
<script src='https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js'></script>
<script>
$(function() {
    var abc = @json($events);
    var Calendar = FullCalendar.Calendar;
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {
        hiddenDays: [0, 1],
        businessHours: {
            // days of week. an array of zero-based day of week integers (0=Sunday)
            daysOfWeek: [2, 3, 4, 5, 6], // Monday - Thursday
            startTime: '09:00', // a start time (10am in this example)
            endTime: '17:00', // an end time (6pm in this example)
        },
        locale: "tr",
        firstDay: 1,
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        eventDidMount: function(info) {
            console.log(info.el)
            $(info.el).attr("data-bs-toggle", "tooltip")
            $(info.el).attr("data-bs-title", "aboo")
            $(info.el).tooltip()
        },

        events: abc,

        themeSystem: 'bootstrap',
        selectable: true,
        selectHelper: true,
        editable: true,
        select: function(start, end, allDays) {
            $('#modal-sm').modal('toggle')
            $('#saveBtn').click(function() {
                var teacher = $('#teacher').val();
                var student = $('#student').val();
                var time = $('#time').val();
                var type = $('#type').val();
                var start_date = moment(start.startStr + ' ' + time).format(
                    'YYYY-MM-DD HH:mm');
                var end_date = moment(start_date).add(1, "h").format('YYYY-MM-DD HH:mm');
                var notes = $('#notes').val();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{route('calendars.store')}}",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        teacher,
                        student,
                        type,
                        start_date,
                        end_date,
                        notes
                    },
                    success: function(response) {
                        $('#modal-sm').modal('toggle')
                        location.reload()
                    },
                    error: function(error) {
                        console.log(error)
                    }
                })
            })
        },

    });

    calendar.render();
})
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
</head>
@endsection