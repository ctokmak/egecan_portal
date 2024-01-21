<?php use Carbon\Carbon; ?>
@extends("layouts.app")
@section("content")
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Öğrenci Listesi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Öğrenci Listesi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div id="example1_wrapper">
                <table id="example1" class="table table-bordered table-striped projects">
                    <thead>
                        <tr>
                            <th style="width:15px">Resim</th>
                            <th>TC Kimlik No</th>
                            <th>İsim</th>
                            <th>Yaş</th>             
                            <th>Tanısı</th>
                            <th>Dersleri</th>
                            <th>Durumu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        
                        <tr>
                            <td><img class="direct-chat-img" src="{{$student['avatar']}}" alt=""></td>
                            <td>{{$student["tc"]}}</td>
                            <td class="text-uppercase"><a href="{{route('students.show',['student'=>$student['id']])}}">{{$student["name"]}}</a></td>
                            <td>{{Carbon::parse($student["dob"])->age}}</td>
                            <td class="text-uppercase">{{$student["diagnoses"]}}</td>
                            <td class="text-uppercase">{{$student["lessons"]}}</td>
                            <td class="text-uppercase">{{$student["status"]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Resim</th>
                            <th>TC Kimlik No</th>
                            <th>İsim</th>
                            <th>Yaş</th>
                            <th>Tanısı</th>
                            <th>Dersleri</th>
                            <th>Durumu</th>
                        </tr>
                    </tfoot>
                </table>
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
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script>
$(function() {
    $("#example1").DataTable({
        language: {
            "emptyTable": "Tabloda herhangi bir veri mevcut değil",
            "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
        "infoEmpty": "Kayıt yok",
        "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
        "infoThousands": ".",
        "lengthMenu": "Sayfada _MENU_ kayıt göster",
        "loadingRecords": "Yükleniyor...",
        "processing": "İşleniyor...",
        "search": "Ara:",
        "zeroRecords": "Eşleşen kayıt bulunamadı",
        "paginate": {
            "first": "İlk",
            "last": "Son",
            "next": "Sonraki",
            "previous": "Önceki"
        },
        "aria": {
            "sortAscending": ": artan sütun sıralamasını aktifleştir",
            "sortDescending": ": azalan sütun sıralamasını aktifleştir"
        },
        "select": {
            "rows": {
                "_": "%d kayıt seçildi",
                "1": "1 kayıt seçildi"
            },
        "cells": {
            "1": "1 hücre seçildi",
            "_": "%d hücre seçildi"
        },
        "columns": {
            "1": "1 sütun seçildi",
            "_": "%d sütun seçildi"
        }
    },
    "autoFill": {
        "cancel": "İptal",
        "fillHorizontal": "Hücreleri yatay olarak doldur",
        "fillVertical": "Hücreleri dikey olarak doldur",
        "fill": "Bütün hücreleri <i>%d<\/i> ile doldur"
    },
    "buttons": {
        "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
        "colvis": "Sütun görünürlüğü",
        "colvisRestore": "Görünürlüğü eski haline getir",
        "copySuccess": {
            "1": "1 satır panoya kopyalandı",
            "_": "%ds satır panoya kopyalandı"
        },
        "copyTitle": "Panoya kopyala",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Bütün satırları göster",
            "_": "%d satır göster"
        },
        "pdf": "PDF",
        "print": "Yazdır",
        "copy": "Kopyala",
        "copyKeys": "Tablodaki veriyi kopyalamak için CTRL veya u2318 + C tuşlarına basınız. İptal etmek için bu mesaja tıklayın veya escape tuşuna basın.",
        "createState": "Şuanki Görünümü Kaydet",
        "removeAllStates": "Tüm Görünümleri Sil",
        "removeState": "Aktif Görünümü Sil",
        "renameState": "Aktif Görünümün Adını Değiştir",
        "savedStates": "Kaydedilmiş Görünümler",
        "stateRestore": "Görünüm -&gt; %d",
        "updateState": "Aktif Görünümün Güncelle"
    },
    "searchBuilder": {
        "add": "Koşul Ekle",
        "button": {
            "0": "Arama Oluşturucu",
            "_": "Arama Oluşturucu (%d)"
        },
        "condition": "Koşul",
        "conditions": {
            "date": {
                "after": "Sonra",
                "before": "Önce",
                "between": "Arasında",
                "empty": "Boş",
                "equals": "Eşittir",
                "not": "Değildir",
                "notBetween": "Dışında",
                "notEmpty": "Dolu"
            },
            "number": {
                "between": "Arasında",
                "empty": "Boş",
                "equals": "Eşittir",
                "gt": "Büyüktür",
                "gte": "Büyük eşittir",
                "lt": "Küçüktür",
                "lte": "Küçük eşittir",
                "not": "Değildir",
                "notBetween": "Dışında",
                "notEmpty": "Dolu"
            },
            "string": {
                "contains": "İçerir",
                "empty": "Boş",
                "endsWith": "İle biter",
                "equals": "Eşittir",
                "not": "Değildir",
                "notEmpty": "Dolu",
                "startsWith": "İle başlar",
                "notContains": "İçermeyen",
                "notStartsWith": "Başlamayan",
                "notEndsWith": "Bitmeyen"
            },
            "array": {
                "contains": "İçerir",
                "empty": "Boş",
                "equals": "Eşittir",
                "not": "Değildir",
                "notEmpty": "Dolu",
                "without": "Hariç"
            }
        },
        "data": "Veri",
        "deleteTitle": "Filtreleme kuralını silin",
        "leftTitle": "Kriteri dışarı çıkart",
        "logicAnd": "ve",
        "logicOr": "veya",
        "rightTitle": "Kriteri içeri al",
        "title": {
            "0": "Arama Oluşturucu",
            "_": "Arama Oluşturucu (%d)"
        },
        "value": "Değer",
        "clearAll": "Filtreleri Temizle"
    },
    "searchPanes": {
        "clearMessage": "Hepsini Temizle",
        "collapse": {
            "0": "Arama Bölmesi",
            "_": "Arama Bölmesi (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown}\/{total}",
        "emptyPanes": "Arama Bölmesi yok",
        "loadMessage": "Arama Bölmeleri yükleniyor ...",
        "title": "Etkin filtreler - %d",
        "showMessage": "Tümünü Göster",
        "collapseMessage": "Tümünü Gizle"
    },
    "thousands": ".",
    "datetime": {
        "amPm": [
            "öö",
            "ös"
        ],
        "hours": "Saat",
        "minutes": "Dakika",
        "next": "Sonraki",
        "previous": "Önceki",
        "seconds": "Saniye",
        "unknown": "Bilinmeyen",
        "weekdays": {
            "6": "Paz",
            "5": "Cmt",
            "4": "Cum",
            "3": "Per",
            "2": "Çar",
            "1": "Sal",
            "0": "Pzt"
        },
        "months": {
            "9": "Ekim",
            "8": "Eylül",
            "7": "Ağustos",
            "6": "Temmuz",
            "5": "Haziran",
            "4": "Mayıs",
            "3": "Nisan",
            "2": "Mart",
            "11": "Aralık",
            "10": "Kasım",
            "1": "Şubat",
            "0": "Ocak"
        }
    },
    "decimal": ",",
    "editor": {
        "close": "Kapat",
        "create": {
            "button": "Yeni",
            "submit": "Kaydet",
            "title": "Yeni kayıt oluştur"
        },
        "edit": {
            "button": "Düzenle",
            "submit": "Güncelle",
            "title": "Kaydı düzenle"
        },
        "error": {
            "system": "Bir sistem hatası oluştu (Ayrıntılı bilgi)"
        },
        "multi": {
            "info": "Seçili kayıtlar bu alanda farklı değerler içeriyor. Seçili kayıtların hepsinde bu alana aynı değeri atamak için buraya tıklayın; aksi halde her kayıt bu alanda kendi değerini koruyacak.",
            "noMulti": "Bu alan bir grup olarak değil ancak tekil olarak düzenlenebilir.",
            "restore": "Değişiklikleri geri al",
            "title": "Çoklu değer"
        },
        "remove": {
            "button": "Sil",
            "confirm": {
                "_": "%d adet kaydı silmek istediğinize emin misiniz?",
                "1": "Bu kaydı silmek istediğinizden emin misiniz?"
            },
            "submit": "Sil",
            "title": "Kayıtları sil"
        }
    },
    "stateRestore": {
        "creationModal": {
            "button": "Kaydet",
            "columns": {
                "search": "Kolon Araması",
                "visible": "Kolon Görünümü"
            },
            "name": "Görünüm İsmi",
            "order": "Sıralama",
            "paging": "Sayfalama",
            "scroller": "Kaydırma (Scrool)",
            "search": "Arama",
            "searchBuilder": "Arama Oluşturucu",
            "select": "Seçimler",
            "title": "Yeni Görünüm Oluştur",
            "toggleLabel": "Kaydedilecek Olanlar"
        },
        "duplicateError": "Bu Görünüm Daha Önce Tanımlanmış",
        "emptyError": "Görünüm Boş Olamaz",
        "emptyStates": "Herhangi Bir Görünüm Yok",
        "removeConfirm": "Görünümü Silmek İstediğinize Eminminisiniz?",
        "removeError": "Görünüm Silinemedi",
        "removeJoiner": "ve",
        "removeSubmit": "Sil",
        "removeTitle": "Görünüm Sil",
        "renameButton": "Değiştir",
        "renameLabel": "Görünüme Yeni İsim Ver -&gt; %s:",
        "renameTitle": "Görünüm İsmini Değiştir"}
        },
        "order":[[2,"asc"]],
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": [{
                extend: "copy",
                text: "Kopyala"
            },
            {
                extend: "csv",
                text: "csv"
            },
            {
                extend: "excel",
                text: "Excel"
            },
            {
                extend: "pdf",
                text: "PDF"
            },
            {
                extend: "print",
                text: "Yazdır"
            },
            {
                extend: "colvis",
                text: "Sütunlar"
            }
        ],
            
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

});
</script>

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

<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection