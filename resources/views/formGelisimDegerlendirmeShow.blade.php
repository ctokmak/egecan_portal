<?php use Carbon\Carbon; ?>
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
        <h3 class="text-center text-bold">ÖZEL EGECAN ÖZEL EĞİTİM VE REHABİLİTASYON MERKEZİ<br />
            GELİŞİM DEĞERLENDİRME FORMU</h3>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Adı Soyadı</label>
                    {{$student}}
                </div>
            </div>
            <div class="col-6 text-right">
                <div class="form-group">
                    <label for="exampleInputPassword1">Değerlendirme Tarihi</label>
                    {{Carbon::parse($form[0]->record_date)->isoFormat("DD MMMM YYYY")}}

                </div>
            </div>
        </div>

        <div class="row">
            <table class="table table-sm">
                <tr class="bg-secondary">
                    <th class="text-center">A - SOSYAL ETKİLEŞİM</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                <tr>
                    <th rowspan="2" class="align-middle" style="width:50%">1. Adına Tepki</th>
                    <td>Etkinlikle Meşgulken</td>
                    <td>@if(isset($plucked['a1a'])) {{$plucked["a1a"]}} @endif</td>
                    <td>@if(isset($plucked['a1a_notes'])) {{$plucked["a1a_notes"]}} @endif</td>
                </tr>
                
                <tr>
                    <td>Etkinlikle Meşgul Değilken</td>
                    <td>@if(isset($plucked['a1b'])) {{$plucked["a1b"]}} @endif</td>
                    <td>@if(isset($plucked['a1b_notes'])) {{$plucked["a1b_notes"]}} @endif</td>
                </tr>

                <tr>
                    <th class="align-middle">2. Göz Kontağı</th>
                    <td></td>
                    <td>@if(isset($plucked['a2'])) {{$plucked["a2"]}} @endif</td>
                    <td>@if(isset($plucked['a2_notes'])) {{$plucked["a2_notes"]}} @endif</td>
                </tr>

                <tr>
                    <th class="align-middle">3. İşaret Etme</th>
                    <td></td>
                    <td>@if(isset($plucked['a3'])) {{$plucked["a3"]}} @endif</td>
                    <td>@if(isset($plucked['a3_notes'])) {{$plucked["a3_notes"]}} @endif</td>
                </tr>
                
                <tr>
                    <th rowspan="2" class="align-middle">4. Sohbet</th>
                    <td>Etme</td>
                    <td>@if(isset($plucked['a4a'])) {{$plucked["a4a"]}} @endif</td>
                    <td>@if(isset($plucked['a4a_notes'])) {{$plucked["a4a_notes"]}} @endif</td>
                </tr>
                
                <tr>
                    <td>Sürdürme</td>
                    <td>@if(isset($plucked['a4b'])) {{$plucked["a4b"]}} @endif</td>
                    <td>@if(isset($plucked['a4b_notes'])) {{$plucked["a4b_notes"]}} @endif</td>
                </tr>

                <tr class="bg-secondary">
                    <th class="text-center">B - EŞLEME VE İLİŞKİLENDİRME</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>

                <tr>
                    <th rowspan="4" class="align-middle">1. Eşleme</th>
                    <td>Nesne - Nesne</td>
                    <td>@if(isset($plucked['b1a'])) {{$plucked["b1a"]}} @endif</td>
                    <td>@if(isset($plucked['b1a_notes'])) {{$plucked["b1a_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Resim - Resim</td>
                    <td>@if(isset($plucked['b1b'])) {{$plucked["b1b"]}} @endif</td>
                    <td>@if(isset($plucked['b1b_notes'])) {{$plucked["b1b_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Rakam - Rakam</td>
                    <td>@if(isset($plucked['b1c'])) {{$plucked["b1c"]}} @endif</td>
                    <td>@if(isset($plucked['b1c_notes'])) {{$plucked["b1c_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Sözcük - Sözcük</td>
                    <td>@if(isset($plucked['b1d'])) {{$plucked["b1d"]}} @endif</td>
                    <td>@if(isset($plucked['b1d_notes'])) {{$plucked["b1d_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th rowspan="2" class="align-middle">2. İlişkilendirme</th>
                    <td>Resim - Nesne</td>
                    <td>@if(isset($plucked['b2a'])) {{$plucked["b2a"]}} @endif</td>
                    <td>@if(isset($plucked['b2a_notes'])) {{$plucked["2ba_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Sözcük - Nesne</td>
                    <td>@if(isset($plucked['b2b'])) {{$plucked["b2b"]}} @endif</td>
                    <td>@if(isset($plucked['b2b_notes'])) {{$plucked["b2b_notes"]}} @endif</td>
                </tr>
                </tr>
                <tr class="bg-secondary">
                    <th class="text-center">C - TAKLİT BECERİLERİ</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    <th rowspan="5" class="align-middle">1. Nesnesiz Taklit</th>
                    <td>Alkış Yapma</td>
                    <td>@if(isset($plucked['c1a'])) {{$plucked["c1a"]}} @endif</td>
                    <td>@if(isset($plucked['c1a_notes'])) {{$plucked["c1a_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Başına Dokunma</td>
                    <td>@if(isset($plucked['c1b'])) {{$plucked["c1b"]}} @endif</td>
                    <td>@if(isset($plucked['c1b_notes'])) {{$plucked["c1b_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Masaya Vurma</td>
                    <td>@if(isset($plucked['c1c'])) {{$plucked["c1c"]}} @endif</td>
                    <td>@if(isset($plucked['c1c_notes'])) {{$plucked["c1c_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Burna Dokunma</td>
                    <td>@if(isset($plucked['c1d'])) {{$plucked["c1d"]}} @endif</td>
                    <td>@if(isset($plucked['c1d_notes'])) {{$plucked["c1d_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Kolları Bağlama</td>
                    <td>@if(isset($plucked['c1e'])) {{$plucked["c1e"]}} @endif</td>
                    <td>@if(isset($plucked['c1e_notes'])) {{$plucked["c1e_notes"]}} @endif</td>
                </tr>

                <tr>
                    <th rowspan="5" class="align-middle">2. Nesneli Taklit</th>
                    <td>Lego Takma</td>
                    <td>@if(isset($plucked['c2a'])) {{$plucked["c2a"]}} @endif</td>
                    <td>@if(isset($plucked['c2a_notes'])) {{$plucked["c2a_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Kağıt Kesme</td>
                    <td>@if(isset($plucked['c2b'])) {{$plucked["c2b"]}} @endif</td>
                    <td>@if(isset($plucked['c2b_notes'])) {{$plucked["c2b_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Çizgi Çizme</td>
                    <td>@if(isset($plucked['c2c'])) {{$plucked["c2c"]}} @endif</td>
                    <td>@if(isset($plucked['c2c_notes'])) {{$plucked["c2c_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Bardağa Küp Atma</td>
                    <td>@if(isset($plucked['c2d'])) {{$plucked["c2d"]}} @endif</td>
                    <td>@if(isset($plucked['c2d_notes'])) {{$plucked["c2d_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Kalem Kapağı Takma</td>
                    <td>@if(isset($plucked['c2e'])) {{$plucked["c2e"]}} @endif</td>
                    <td>@if(isset($plucked['c2e_notes'])) {{$plucked["c2e_notes"]}} @endif</td>
                </tr>

                <tr>
                    <th rowspan="3" class="align-middle">3. Sözel Taklit</th>
                    <td>Ses (a,e,ı,i,o,ö,u,ü)</td>
                    <td>@if(isset($plucked['c3a'])) {{$plucked["c3a"]}} @endif</td>
                    <td>@if(isset($plucked['c3a_notes'])) {{$plucked["c3a_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Sözcük (baba, anne, aç, su, al-ver)</td>
                    <td>@if(isset($plucked['c3b'])) {{$plucked["c3b"]}} @endif</td>
                    <td>@if(isset($plucked['c3b_notes'])) {{$plucked["c3b_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Cümle (su istiyorum, karnım acıktı)</td>
                    <td>@if(isset($plucked['c3c'])) {{$plucked["c3c"]}} @endif</td>
                    <td>@if(isset($plucked['c3c_notes'])) {{$plucked["c3c_notes"]}} @endif</td>
                </tr>
                
                <tr class="bg-secondary">
                    <th class="text-center">D - YÖNERGE TAKİBİ</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>

                <tr>
                    <th class="align-middle">1. Adına Tepki Verir</th>
                    <td></td>
                    <td>@if(isset($plucked['d1'])) {{$plucked["d1"]}} @endif</td>
                    <td>@if(isset($plucked['d1_notes'])) {{$plucked["d1_notes"]}} @endif</td>
                </tr>

                <tr>
                    <th rowspan="5" class="align-middle">2. Tek Basamaklı Yönergeleri Uygular</th>
                    <td>Bana Bak</td>
                    <td>@if(isset($plucked['d2a'])) {{$plucked["d2a"]}} @endif</td>
                    <td>@if(isset($plucked['d2a_notes'])) {{$plucked["d2a_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Kalk</td>
                    <td>@if(isset($plucked['d2b'])) {{$plucked["d2b"]}} @endif</td>
                    <td>@if(isset($plucked['d2b_notes'])) {{$plucked["d2b_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Otur</td>
                    <td>@if(isset($plucked['d2c'])) {{$plucked["d2c"]}} @endif</td>
                    <td>@if(isset($plucked['d2c_notes'])) {{$plucked["d2c_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Ellerini Cebine Sok</td>
                    <td>@if(isset($plucked['d2d'])) {{$plucked["d2d"]}} @endif</td>
                    <td>@if(isset($plucked['d2d_notes'])) {{$plucked["d2d_notes"]}} @endif</td>
                </tr>
                <tr>
                    <td>Buraya Gel</td>
                    <td>@if(isset($plucked['d2e'])) {{$plucked["d2e"]}} @endif</td>
                    <td>@if(isset($plucked['d2e_notes'])) {{$plucked["d2e_notes"]}} @endif</td>
                </tr>
                
                
                <tr class="bg-secondary">
                    <th class="text-center">E - İSTEK BİLDİRME</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                <tr>
                    <th class="align-middle">1. İşaret Ederek Kendiliğinden Talep Etme</th>
                    <td></td>
                    <td>@if(isset($plucked['e1'])) {{$plucked["e1"]}} @endif</td>
                    <td>@if(isset($plucked['e1_notes'])) {{$plucked["e1_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">2. Ne İstiyorsun Sorusuna İşaretle Talep Eder</th>
                    <td></td>
                    <td>@if(isset($plucked['e2'])) {{$plucked["e2"]}} @endif</td>
                    <td>@if(isset($plucked['e2_notes'])) {{$plucked["e2_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">3. Göz Teması Kurarak Talep Etme</th>
                    <td></td>
                    <td>@if(isset($plucked['e3'])) {{$plucked["e3"]}} @endif</td>
                    <td>@if(isset($plucked['e3_notes'])) {{$plucked["e3_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">4. Başkalarından Birşey Yapmasını Talep Eder</th>
                    <td></td>
                    <td>@if(isset($plucked['e4'])) {{$plucked["e4"]}} @endif</td>
                    <td>@if(isset($plucked['e4_notes'])) {{$plucked["e4_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">5. Kafa Hareketi ile "Evet/Hayır" Der</th>
                    <td></td>
                    <td>@if(isset($plucked['e5'])) {{$plucked["e5"]}} @endif</td>
                    <td>@if(isset($plucked['e5_notes'])) {{$plucked["e5_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">6. Cümle Kurarak Talep Eder</th>
                    <td></td>
                    <td>@if(isset($plucked['e6'])) {{$plucked["e6"]}} @endif</td>
                    <td>@if(isset($plucked['e6_notes'])) {{$plucked["e6_notes"]}} @endif</td>
                </tr>
                
                <tr class="bg-secondary">
                    <th class="text-center">F - İSİMLENDİRME</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                
                <tr>
                    <th class="align-middle">1. Nesne İsimlendirme</th>
                    <td></td>
                    <td>@if(isset($plucked['f1'])) {{$plucked["f1"]}} @endif</td>
                    <td>@if(isset($plucked['f1_notes'])) {{$plucked["f1_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">2. Kişi İsimlendirme (Anne, baba, bu kim sorusu sorularak)</th>
                    <td></td>
                    <td>@if(isset($plucked['f2'])) {{$plucked["f2"]}} @endif</td>
                    <td>@if(isset($plucked['f2_notes'])) {{$plucked["f2_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">3. Vücut Bölümlerini İsimlendirme</th>
                    <td></td>
                    <td>@if(isset($plucked['f3'])) {{$plucked["f3"]}} @endif</td>
                    <td>@if(isset($plucked['f3_notes'])) {{$plucked["f3_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">4. Olay İsimlendirme (Bu ne yapıyor)</th>
                    <td></td>
                    <td>@if(isset($plucked['f4'])) {{$plucked["f4"]}} @endif</td>
                    <td>@if(isset($plucked['f4_notes'])) {{$plucked["f4_notes"]}} @endif</td>
                </tr>
                
                
                <tr class="bg-secondary">
                    <th class="text-center">G - PRAGMATİK DİL</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                
                <tr>
                    <th class="align-middle">1. Şarkılardaki kelimeleri tamamlamak. (Ali babanın çiftliğinde koyunları var.............çocuğun devam ettirmesi)</th>
                    <td></td>
                    <td>@if(isset($plucked['g1'])) {{$plucked["g1"]}} @endif</td>
                    <td>@if(isset($plucked['g1_notes'])) {{$plucked["g1_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">2. Olayları tamamlama (hadi aşağı ve yukarı ............ (*zıplayalım))</th>
                    <td></td>
                    <td>@if(isset($plucked['g2'])) {{$plucked["g2"]}} @endif</td>
                    <td>@if(isset($plucked['g2_notes'])) {{$plucked["g2_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">3. Hayvan sesleri tamamlama (köpek....der (hav hav))</th>
                    <td></td>
                    <td>@if(isset($plucked['g3'])) {{$plucked["g3"]}} @endif</td>
                    <td>@if(isset($plucked['g3_notes'])) {{$plucked["g3_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">4. Kişisel bilgi sorularını cevaplar</th>
                    <td></td>
                    <td>@if(isset($plucked['g4'])) {{$plucked["g4"]}} @endif</td>
                    <td>@if(isset($plucked['g4_notes'])) {{$plucked["g4_notes"]}} @endif</td>
                </tr>
                <tr>
                    <th class="align-middle">5. Ortak aktivite adlandırır. (el yıkayan bir çocuk resmi gördüğünde ve.......... ne?) yapmanın tam zamanı denildiğinde "elini yıkamanın" cevabını vermesi)</th>
                    <td></td>
                    <td>@if(isset($plucked['g5'])) {{$plucked["g5"]}} @endif</td>
                    <td>@if(isset($plucked['g5_notes'])) {{$plucked["g5_notes"]}} @endif</td>
                </tr>
                    
                
                
                <tr class="bg-secondary">
                    <th class="text-center">H - MOTOR BECERİLER</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    
                    <tr>
                        <th rowspan="3" class="align-middle">1. Küçük Motor</th>
                        <td>Rastgele kesme</td>
                        <td>@if(isset($plucked['h1a'])) {{$plucked["h1a"]}} @endif</td>
                        <td>@if(isset($plucked['h1a_notes'])) {{$plucked["h1a_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Sınırlı alanı kesme</td>
                        <td>@if(isset($plucked['h1b'])) {{$plucked["h1b"]}} @endif</td>
                        <td>@if(isset($plucked['h1b_notes'])) {{$plucked["h1b_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Çizim kopya etme</td>
                        <td>@if(isset($plucked['h1c'])) {{$plucked["h1c"]}} @endif</td>
                        <td>@if(isset($plucked['h1c_notes'])) {{$plucked["h1c_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="align-middle">2. Büyük Motor</th>
                        <td>Yürüme</td>
                        <td>@if(isset($plucked['h2a'])) {{$plucked["h2a"]}} @endif</td>
                        <td>@if(isset($plucked['h2a_notes'])) {{$plucked["h2a_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Koşma</td>
                        <td>@if(isset($plucked['h2b'])) {{$plucked["h2b"]}} @endif</td>
                        <td>@if(isset($plucked['h2b_notes'])) {{$plucked["h2b_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Tırmanma</td>
                        <td>@if(isset($plucked['h2c'])) {{$plucked["h2c"]}} @endif</td>
                        <td>@if(isset($plucked['h2c_notes'])) {{$plucked["h2c_notes"]}} @endif</td>
                    </tr>
                    
                

                
                <tr class="bg-secondary">
                    <th class="text-center">I - OYUN VE SERBEST ZAMAN</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    <th colspan="4">I - OYUN VE SERBEST ZAMAN</th>
                    <tr>
                        <th class="align-middle">1. Çevredeki oyuncakları farkeder</th>
                        <td></td>
                        <td>@if(isset($plucked['i1'])) {{$plucked["i1"]}} @endif</td>
                        <td>@if(isset($plucked['i1_notes'])) {{$plucked["i1_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">2. Diğer kişilerin onun oyuncaklarıyla oynamasına izin verir</th>
                        <td></td>
                        <td>@if(isset($plucked['i2'])) {{$plucked["i2"]}} @endif</td>
                        <td>@if(isset($plucked['i2_notes'])) {{$plucked["i2_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">3. Dışarıda bağımsız vakit geçirir. (Anneden bilgi alınız)</th>
                        <td></td>
                        <td>@if(isset($plucked['i3'])) {{$plucked["i3"]}} @endif</td>
                        <td>@if(isset($plucked['i3_notes'])) {{$plucked["i3_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">4. Kapalı alan içerisinde bağımsız vakit geçirir</th>
                        <td></td>
                        <td>@if(isset($plucked['i4'])) {{$plucked["i4"]}} @endif</td>
                        <td>@if(isset($plucked['i4_notes'])) {{$plucked["i4_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">5. Yalnız oynarken oyun adlandırır</th>
                        <td></td>
                        <td>@if(isset($plucked['i5'])) {{$plucked["i5"]}} @endif</td>
                        <td>@if(isset($plucked['i5_notes'])) {{$plucked["i5_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">6. Oyun kurarken oyunla alakalı sesler çıkartır</th>
                        <td></td>
                        <td>@if(isset($plucked['i6'])) {{$plucked["i6"]}} @endif</td>
                        <td>@if(isset($plucked['i6_notes'])) {{$plucked["i6_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">7. Diğer çocuklarla interaktif oyun oynar. (Anneden bilgi alınız)</th>
                        <td></td>
                        <td>@if(isset($plucked['i7'])) {{$plucked["i7"]}} @endif</td>
                        <td>@if(isset($plucked['i7_notes'])) {{$plucked["i7_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th rowspan="2" class="align-middle">8. Yap-Boz</th>
                        <td>İlişkili</td>
                        <td>@if(isset($plucked['i8a'])) {{$plucked["i8a"]}} @endif</td>
                        <td>@if(isset($plucked['i8a_notes'])) {{$plucked["i8a_notes"]}} @endif</td>
                    </tr>
                     <tr>
                        <td>İlişkisiz</td>
                        <td>@if(isset($plucked['i8b'])) {{$plucked["i8b"]}} @endif</td>
                        <td>@if(isset($plucked['i8b_notes'])) {{$plucked["i8b_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">9. Oyun oynama</th>
                        <td></td>
                        <td>@if(isset($plucked['i9'])) {{$plucked["i9"]}} @endif</td>
                        <td>@if(isset($plucked['i9_notes'])) {{$plucked["i9_notes"]}} @endif</td>
                    </tr>

                
                
                <tr class="bg-secondary">
                    <th class="text-center">J - AKADEMİK BECERİLER</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    <tr>
                        <th rowspan="5" class="align-middle">1. Türkçe</th>
                        <td>Sözcük tanıma</td>
                        <td>@if(isset($plucked['j1a'])) {{$plucked["j1a"]}} @endif</td>
                        <td>@if(isset($plucked['j1a_notes'])) {{$plucked["j1a_notes"]}} @endif</td>
                    </tr>
                     <tr>
                        <td>Sözcük okuma</td>
                        <td>@if(isset($plucked['j1b'])) {{$plucked["j1b"]}} @endif</td>
                        <td>@if(isset($plucked['j1b_notes'])) {{$plucked["j1b_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Sözcük yazma / Kopya etme</td>
                        <td>@if(isset($plucked['j1c'])) {{$plucked["j1c"]}} @endif</td>
                        <td>@if(isset($plucked['j1c_notes'])) {{$plucked["j1c_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Metin okuma</td>
                        <td>@if(isset($plucked['j1d'])) {{$plucked["j1d"]}} @endif</td>
                        <td>@if(isset($plucked['j1d_notes'])) {{$plucked["j1d_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Okuma / Anlama</td>
                        <td>@if(isset($plucked['j1e'])) {{$plucked["j1e"]}} @endif</td>
                        <td>@if(isset($plucked['j1e_notes'])) {{$plucked["j1e_notes"]}} @endif</td>
                    </tr>

                    <tr>
                        <th rowspan="8" class="align-middle">2. Matematik</th>
                        <td>Ritmik sayma</td>
                        <td>@if(isset($plucked['j2a'])) {{$plucked["j2a"]}} @endif</td>
                        <td>@if(isset($plucked['j2a_notes'])) {{$plucked["j2a_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Nesne sayma</td>
                        <td>@if(isset($plucked['j2b'])) {{$plucked["j2b"]}} @endif</td>
                        <td>@if(isset($plucked['j2b_notes'])) {{$plucked["j2b_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Tane sayma</td>
                        <td>@if(isset($plucked['j2c'])) {{$plucked["j2c"]}} @endif</td>
                        <td>@if(isset($plucked['j2c_notes'])) {{$plucked["j2c_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Rakam tanıma</td>
                        <td>@if(isset($plucked['j2d'])) {{$plucked["j2d"]}} @endif</td>
                        <td>@if(isset($plucked['j2d_notes'])) {{$plucked["j2d_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Toplama</td>
                        <td>@if(isset($plucked['j2e'])) {{$plucked["j2e"]}} @endif</td>
                        <td>@if(isset($plucked['j2e_notes'])) {{$plucked["j2e_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Çıkartma</td>
                        <td>@if(isset($plucked['j2f'])) {{$plucked["j2f"]}} @endif</td>
                        <td>@if(isset($plucked['j2f_notes'])) {{$plucked["j2f_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Çarpma</td>
                        <td>@if(isset($plucked['j2g'])) {{$plucked["j2g"]}} @endif</td>
                        <td>@if(isset($plucked['j2g_notes'])) {{$plucked["j2g_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Bölme</td>
                        <td>@if(isset($plucked['j2h'])) {{$plucked["j2h"]}} @endif</td>
                        <td>@if(isset($plucked['j2h_notes'])) {{$plucked["j2h_notes"]}} @endif</td>
                    </tr>

                    <tr>
                        <th rowspan="7" class="align-middle">3. Genel Bilgi</th>
                        <td>Bu bir elma? (Kalem gösterip)</td>
                        <td>@if(isset($plucked['j3a'])) {{$plucked["j3a"]}} @endif</td>
                        <td>@if(isset($plucked['j3a_notes'])) {{$plucked["j3a_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Haftanın günleri neler?</td>
                        <td>@if(isset($plucked['j3b'])) {{$plucked["j3b"]}} @endif</td>
                        <td>@if(isset($plucked['j3b_notes'])) {{$plucked["j3b_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Mevsimler neler?</td>
                        <td>@if(isset($plucked['j3c'])) {{$plucked["j3c"]}} @endif</td>
                        <td>@if(isset($plucked['j3c_notes'])) {{$plucked["j3c_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Bildiğin beş meyve</td>
                        <td>@if(isset($plucked['j3d'])) {{$plucked["j3d"]}} @endif</td>
                        <td>@if(isset($plucked['j3d_notes'])) {{$plucked["j3d_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Hangi hayvanlar et yer?</td>
                        <td>@if(isset($plucked['j3e'])) {{$plucked["j3e"]}} @endif</td>
                        <td>@if(isset($plucked['j3e_notes'])) {{$plucked["j3e_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Deniz taşıtlarını say</td>
                        <td>@if(isset($plucked['j3f'])) {{$plucked["j3f"]}} @endif</td>
                        <td>@if(isset($plucked['j3f_notes'])) {{$plucked["j3f_notes"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Neyle duyarız?</td>
                        <td>@if(isset($plucked['j3g'])) {{$plucked["j3g"]}} @endif</td>
                        <td>@if(isset($plucked['j3g_notes'])) {{$plucked["j3g_notes"]}} @endif</td>
                    </tr>

                
                <tr class="bg-secondary">
                    <th class="text-center">K - KAVRAM AYIRT ETME</th>
                    <th>Soru</th>
                    <th>Tanıma / Adlandırma</th>
                    <th>Notlar</th>
                </tr>
                    <tr>
                        <th rowspan="8" class="align-middle">1. Kavram Kartları</th>
                        <td>Köpek</td>
                        <td>
                            @if(isset($plucked['tanima_k1a'])){{$plucked["tanima_k1a"]}} @endif
                            @if(isset($plucked['adlandirma_k1a'])) / {{$plucked["adlandirma_k1a"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k1a_description'])) {{$plucked["k1a_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Balık</td>
                        <td>
                            @if(isset($plucked['tanima_k1b'])){{$plucked["tanima_k1b"]}} @endif
                            @if(isset($plucked['adlandirma_k1b'])) / {{$plucked["adlandirma_k1b"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k1b_description'])) {{$plucked["k1b_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Ayakkabı</td>
                        <td>
                            @if(isset($plucked['tanima_k1c'])){{$plucked["tanima_k1c"]}} @endif
                            @if(isset($plucked['adlandirma_k1c'])) / {{$plucked["adlandirma_k1c"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k1c_description'])) {{$plucked["k1c_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Muz</td>
                        <td>
                            @if(isset($plucked['tanima_k1d'])){{$plucked["tanima_k1d"]}} @endif
                            @if(isset($plucked['adlandirma_k1d'])) / {{$plucked["adlandirma_k1d"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k1d_description'])) {{$plucked["k1d_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Sandalye</td>
                        <td>
                            @if(isset($plucked['tanima_k1e'])){{$plucked["tanima_k1e"]}} @endif
                            @if(isset($plucked['adlandirma_k1e'])) / {{$plucked["adlandirma_k1e"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k1e_description'])) {{$plucked["k1e_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Top</td>
                        <td>
                            @if(isset($plucked['tanima_k1f'])){{$plucked["tanima_k1f"]}} @endif
                            @if(isset($plucked['adlandirma_k1f'])) / {{$plucked["adlandirma_k1f"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k1f_description'])) {{$plucked["k1f_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <td>Kamyon</td>
                        <td>
                            @if(isset($plucked['tanima_k1g'])){{$plucked["tanima_k1g"]}} @endif
                            @if(isset($plucked['adlandirma_k1g'])) / {{$plucked["adlandirma_k1g"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k1g_description'])) {{$plucked["k1g_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <td>Bıçak</td>
                        <td>
                            @if(isset($plucked['tanima_k1h'])){{$plucked["tanima_k1h"]}} @endif
                            @if(isset($plucked['adlandirma_k1h'])) / {{$plucked["adlandirma_k1h"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k1h_description'])) {{$plucked["k1h_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <th rowspan="6" class="align-middle">2. Vücut Bölümleri</th>
                        <td>El</td>
                        <td>
                            @if(isset($plucked['tanima_k2a'])){{$plucked["tanima_k2a"]}} @endif
                            @if(isset($plucked['adlandirma_k2a'])) / {{$plucked["adlandirma_k2a"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k2a_description'])) {{$plucked["k2a_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <td>Saç</td>
                        <td>
                            @if(isset($plucked['tanima_k2b'])){{$plucked["tanima_k2b"]}} @endif
                            @if(isset($plucked['adlandirma_k2b'])) / {{$plucked["adlandirma_k2b"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k2b_description'])) {{$plucked["k2b_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <td>Burun</td>
                        <td>
                            @if(isset($plucked['tanima_k2c'])){{$plucked["tanima_k2c"]}} @endif
                            @if(isset($plucked['adlandirma_k2c'])) / {{$plucked["adlandirma_k2c"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k2c_description'])) {{$plucked["k2c_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <td>Göz</td>
                        <td>
                            @if(isset($plucked['tanima_k2d'])){{$plucked["tanima_k2d"]}} @endif
                            @if(isset($plucked['adlandirma_k2d'])) / {{$plucked["adlandirma_k2d"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k2d_description'])) {{$plucked["k2d_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <td>Kulak</td>
                        <td>
                            @if(isset($plucked['tanima_k2e'])){{$plucked["tanima_k2e"]}} @endif
                            @if(isset($plucked['adlandirma_k2e'])) / {{$plucked["adlandirma_k2e"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k2e_description'])) {{$plucked["k2e_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <td>Ağız</td>
                        <td>
                            @if(isset($plucked['tanima_k2f'])){{$plucked["tanima_k2f"]}} @endif
                            @if(isset($plucked['adlandirma_k2f'])) / {{$plucked["adlandirma_k2f"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k2f_description'])) {{$plucked["k2f_description"]}} @endif</td>
                    </tr>

                    <tr>
                        <th rowspan="6" class="align-middle">3. Renkler</th>
                        <td>Kırmızı</td>
                        <td>
                            @if(isset($plucked['tanima_k3a'])){{$plucked["tanima_k3a"]}} @endif
                            @if(isset($plucked['adlandirma_k3a'])) / {{$plucked["adlandirma_k3a"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k3a_description'])) {{$plucked["k3a_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Mavi</td>
                        <td>
                            @if(isset($plucked['tanima_k3b'])){{$plucked["tanima_k3b"]}} @endif
                            @if(isset($plucked['adlandirma_k3b'])) / {{$plucked["adlandirma_k3b"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k3b_description'])) {{$plucked["k3b_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Sarı</td>
                        <td>
                            @if(isset($plucked['tanima_k3c'])){{$plucked["tanima_k3c"]}} @endif
                            @if(isset($plucked['adlandirma_k3c'])) / {{$plucked["adlandirma_k3c"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k3c_description'])) {{$plucked["k3c_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Yeşil</td>
                        <td>
                            @if(isset($plucked['tanima_k3d'])){{$plucked["tanima_k3d"]}} @endif
                            @if(isset($plucked['adlandirma_k3d'])) / {{$plucked["adlandirma_k3d"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k3d_description'])) {{$plucked["k3d_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Siyah</td>
                        <td>
                            @if(isset($plucked['tanima_k3e'])){{$plucked["tanima_k3e"]}} @endif
                            @if(isset($plucked['adlandirma_k3e'])) / {{$plucked["adlandirma_k3e"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k3e_description'])) {{$plucked["k3e_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Beyaz</td>
                        <td>
                            @if(isset($plucked['tanima_k3f'])){{$plucked["tanima_k3f"]}} @endif
                            @if(isset($plucked['adlandirma_k3f'])) / {{$plucked["adlandirma_k3f"]}} @endif
                        </td>
                        <td>@if(isset($plucked['k3f_description'])) {{$plucked["k3f_description"]}} @endif</td>
                    </tr>
                    


                
                <tr class="bg-secondary">
                    <th class="text-center">L - SORU CEVAPLAMA</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    
                    
                    <tr>
                        <th rowspan="9" class="align-middle">1. Alıcı Dil / İfade Edici Dil</th>
                        <td>Adın ne?</td>
                        <td>@if(isset($plucked['l1a'])){{$plucked["l1a"]}} @endif</td>
                        <td>@if(isset($plucked['l1a_description'])) {{$plucked["l1a_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Kaç yaşındasın?</td>
                        <td>@if(isset($plucked['l1b'])){{$plucked["l1b"]}} @endif</td>
                        <td>@if(isset($plucked['l1b_description'])) {{$plucked["l1b_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Annenin adı ne?</td>
                        <td>@if(isset($plucked['l1c'])){{$plucked["l1c"]}} @endif</td>
                        <td>@if(isset($plucked['l1c_description'])) {{$plucked["l1c_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Babanın adı ne?</td>
                        <td>@if(isset($plucked['l1d'])){{$plucked["l1d"]}} @endif</td>
                        <td>@if(isset($plucked['l1d_description'])) {{$plucked["l1d_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Nerede oturuyorsun?</td>
                        <td>@if(isset($plucked['l1e'])){{$plucked["l1e"]}} @endif</td>
                        <td>@if(isset($plucked['l1e_description'])) {{$plucked["l1e_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Nasılsın?</td>
                        <td>@if(isset($plucked['l1f'])){{$plucked["l1f"]}} @endif</td>
                        <td>@if(isset($plucked['l1f_description'])) {{$plucked["l1f_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Bugün günlerden ne?</td>
                        <td>@if(isset($plucked['l1g'])){{$plucked["l1g"]}} @endif</td>
                        <td>@if(isset($plucked['l1g_description'])) {{$plucked["l1g_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Sen bir erkek/kız mısın?</td>
                        <td>@if(isset($plucked['l1h'])){{$plucked["l1h"]}} @endif</td>
                        <td>@if(isset($plucked['l1h_description'])) {{$plucked["l1h_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Kardeşin var mı? Adı ne?</td>
                        <td>@if(isset($plucked['l1i'])){{$plucked["l1i"]}} @endif</td>
                        <td>@if(isset($plucked['l1i_description'])) {{$plucked["l1i_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th rowspan="5" class="align-middle">2. Mantık Soruları</th>
                        <td>Balona kalem batırılırsa ne olur?</td>
                        <td>@if(isset($plucked['l2a'])){{$plucked["l2a"]}} @endif</td>
                        <td>@if(isset($plucked['l2a_description'])) {{$plucked["l2a_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Suyu buzluğa koyarsak ne olur?</td>
                        <td>@if(isset($plucked['l2b'])){{$plucked["l2b"]}} @endif</td>
                        <td>@if(isset($plucked['l2b_description'])) {{$plucked["l2b_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Dondurmayı güneşte bırakırsak ne olur?</td>
                        <td>@if(isset($plucked['l2c'])){{$plucked["l2c"]}} @endif</td>
                        <td>@if(isset($plucked['l2c_description'])) {{$plucked["l2c_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Hasta olan biri ne yapar?</td>
                        <td>@if(isset($plucked['l2d'])){{$plucked["l2d"]}} @endif</td>
                        <td>@if(isset($plucked['l2d_description'])) {{$plucked["l2d_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <td>Bebekler neden ağlar?</td>
                        <td>@if(isset($plucked['l2e'])){{$plucked["l2e"]}} @endif</td>
                        <td>@if(isset($plucked['l2e_description'])) {{$plucked["l2e_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th rowspan="5" class="align-middle">3. "N" li sorular</th>
                        <td>Neden yağmurda şemsiye kullanılır?</td>
                        <td>@if(isset($plucked['l3a'])){{$plucked["l3a"]}} @endif</td>
                        <td>@if(isset($plucked['l3a_description'])) {{$plucked["l3a_description"]}} @endif</td>
                    </tr>
                     <tr>
                        <td>Neden kışın mont giyeriz?</td>
                        <td>@if(isset($plucked['l3b'])){{$plucked["l3b"]}} @endif</td>
                        <td>@if(isset($plucked['l3b_description'])) {{$plucked["l3b_description"]}} @endif</td>
                    </tr>
                     <tr>
                        <td>Neden kuşların kanadı var?</td>
                        <td>@if(isset($plucked['l3c'])){{$plucked["l3c"]}} @endif</td>
                        <td>@if(isset($plucked['l3c_description'])) {{$plucked["l3c_description"]}} @endif</td>
                    </tr>
                     <tr>
                        <td>Neden saate bakarız?</td>
                        <td>@if(isset($plucked['l3d'])){{$plucked["l3d"]}} @endif</td>
                        <td>@if(isset($plucked['l3d_description'])) {{$plucked["l3d_description"]}} @endif</td>
                    </tr>
                     <tr>
                        <td>Neden insanlar gözlük takar?</td>
                        <td>@if(isset($plucked['l3e'])){{$plucked["l3e"]}} @endif</td>
                        <td>@if(isset($plucked['l3e_description'])) {{$plucked["k1a_description"]}} @endif</td>
                    </tr>
                
                <tr class="bg-secondary">
                    <th class="text-center">M - SOSYAL ETKİLEŞİM</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                
                    <tr>
                        <th class="align-middle">1. Sosyal bakışı var</th>
                        <td></td>
                        <td>@if(isset($plucked['m1'])) {{$plucked["m1"]}} @endif</td>
                        <td>@if(isset($plucked['m1_description'])) {{$plucked["m1_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">2. Paralel vakit geçirir</th>
                        <td></td>
                        <td>@if(isset($plucked['m2'])) {{$plucked["m2"]}} @endif</td>
                        <td>@if(isset($plucked['m2_description'])) {{$plucked["m2_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">3. Verilen nesneleri alır</th>
                        <td></td>
                        <td>@if(isset($plucked['m3'])) {{$plucked["m3"]}} @endif</td>
                        <td>@if(isset($plucked['m3_description'])) {{$plucked["m3_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">4. Sosyal etkileşim başlatır</th>
                        <td></td>
                        <td>@if(isset($plucked['m4'])) {{$plucked["m4"]}} @endif</td>
                        <td>@if(isset($plucked['m4_description'])) {{$plucked["m4_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">5. Ortak dikkatini verir</th>
                        <td></td>
                        <td>@if(isset($plucked['m5'])) {{$plucked["m5"]}} @endif</td>
                        <td>@if(isset($plucked['m5_description'])) {{$plucked["m5_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">6. İletişim başlatır</th>
                        <td></td>
                        <td>@if(isset($plucked['m6'])) {{$plucked["m6"]}} @endif</td>
                        <td>@if(isset($plucked['m6_description'])) {{$plucked["m6_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">7. Oyunlarda işbirliği yapar (örneğin, eğitimci hadi bunu / böyle oynayalım dediğinde yapar)</th>
                        <td></td>
                        <td>@if(isset($plucked['m7'])) {{$plucked["m7"]}} @endif</td>
                        <td>@if(isset($plucked['m7_description'])) {{$plucked["m7_description"]}} @endif</td>
                    </tr>
                
                <tr class="bg-secondary">
                    <th class="text-center">N - ALICI DİL</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    
                     <tr>
                        <th class="align-middle">1. Adına tepki verir</th>
                        <td></td>
                        <td>@if(isset($plucked['n1'])) {{$plucked["n1"]}} @endif</td>
                        <td>@if(isset($plucked['n1_description'])) {{$plucked["n1_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">2. Tek basamaklı yönergeleri uygular</th>
                        <td></td>
                        <td>@if(isset($plucked['n2'])) {{$plucked["n2"]}} @endif</td>
                        <td>@if(isset($plucked['n2_description'])) {{$plucked["n2_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">3. İki basamaklı yönergeleri uygular</th>
                        <td></td>
                        <td>@if(isset($plucked['n3'])) {{$plucked["n3"]}} @endif</td>
                        <td>@if(isset($plucked['n3_description'])) {{$plucked["n3_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">4. Etkinlik içi / dışı yönergeleri uygular</th>
                        <td></td>
                        <td>@if(isset($plucked['n4'])) {{$plucked["n4"]}} @endif</td>
                        <td>@if(isset($plucked['n4_description'])) {{$plucked["n4_description"]}} @endif</td>
                    </tr>

                
                <tr class="bg-secondary">
                    <th class="text-center">O - ÖZ BAKIM BECERİLERİ</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    
                    <tr>
                        <th class="align-middle">1. Giyinme (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['o1'])) {{$plucked["o1"]}} @endif</td>
                        <td>@if(isset($plucked['o1_description'])) {{$plucked["o1_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">2. Soyunma (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['o2'])) {{$plucked["o2"]}} @endif</td>
                        <td>@if(isset($plucked['o2_description'])) {{$plucked["o2_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">3. Tuvalet (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['o3'])) {{$plucked["o3"]}} @endif</td>
                        <td>@if(isset($plucked['o3_description'])) {{$plucked["o3_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">4. Kişisel bakım (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['o4'])) {{$plucked["o4"]}} @endif</td>
                        <td>@if(isset($plucked['o4_description'])) {{$plucked["o4_description"]}} @endif</td>
                    </tr>
                
                <tr class="bg-secondary">
                    <th class="text-center">P - YEME, İÇME, UYUMA</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    <tr>
                        <th class="align-middle">1. Yeme İçme (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['p1'])) {{$plucked["p1"]}} @endif</td>
                        <td>@if(isset($plucked['p1_description'])) {{$plucked["p1_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">2. Uyku (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['p2'])) {{$plucked["p2"]}} @endif</td>
                        <td>@if(isset($plucked['p2_description'])) {{$plucked["p2_description"]}} @endif</td>
                    </tr>
                
                
                <tr class="bg-secondary">
                    <th class="text-center">R - PROBLEM DAVRANIŞ SERGİLEME</th>
                    <th>Soru</th>
                    <th>Cevap</th>
                    <th>Notlar</th>
                </tr>
                    <tr>
                        <th class="align-middle">1. Sözel (bağırma, kızma, tükürme) (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['r1'])) {{$plucked["r1"]}} @endif</td>
                        <td>@if(isset($plucked['r1_description'])) {{$plucked["r1_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">2. Vurma, saldırma (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['p2'])) {{$plucked["p2"]}} @endif</td>
                        <td>@if(isset($plucked['p2_description'])) {{$plucked["p2_description"]}} @endif</td>
                    </tr>
                    <tr>
                        <th class="align-middle">3. Gülme (karşısındakini sinirlendirmek isteme) (Anneye sorunuz)</th>
                        <td></td>
                        <td>@if(isset($plucked['r3'])) {{$plucked["r3"]}} @endif</td>
                        <td>@if(isset($plucked['r3_description'])) {{$plucked["r3_description"]}} @endif</td>
                    </tr>
            </table>

            <p>
                <span class="text-bold">Değerlendirmeyi yapan:</span> <span class="text-uppercase">{{$teacher}}</span>
            </p>
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