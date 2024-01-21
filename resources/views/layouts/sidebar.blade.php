<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/dashboard" class="nav-link">Anasayfa</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Ara"
                            aria-label="Ara" />
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/dashboard" class="brand-link">
        <img src="../../dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Egecan Özel Eğitim</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Anasayfa</p>
                    </a>
                </li>



                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Öğrenciler<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/students" class="nav-link">
                                <i class="fas fa-list-ol nav-icon"></i>
                                <p>Listele</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('students.create')}}">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Ekle</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-file-signature"></i>
                        <p>Formlar<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <!--                         <li class="nav-item">
                            <a href="/students" class="nav-link">
                                <p>Aile Görüşme Formu</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('gelisimdegerlendirme.index')}}">

                                <p>Gelişim Değerlendirme Formu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bedenselperformans.index')}}">

                                <p>Bedensel Performans Değerlendirme Formu</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{route('students.create')}}">

                                <p>Duyu Değerlendirme Formu</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('abbls.index')}}">

                                <p>ABLLS-R</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-file-signature"></i>
                        <p>Ders Programları<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/calendars" class="nav-link">
                                <p>Hepsi</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/map" class="nav-link">
                        <i class="nav-icon fas fa-map"></i>
                        <p>Harita</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="/map" class="nav-link">
                        <i class="nav-icon fas fa-map"></i>
                        <p>{{ Auth::user()->name }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" class="nav-link" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Çıkış yap</p>
                        </a>
                    </form>
                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>