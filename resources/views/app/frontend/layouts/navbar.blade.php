<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <div class="logo" style="font-size: 20px">
                        <img src="{{ asset('images/slider/logolab.png') }}" alt="" style="width: 80px; padding-top: 5px" color="black"> FIK-LABORATORIUM
                    </div></a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li class='active'><a href="{{ route('app.home') }}">Home</a></li>
                            <li><a href="#">Laboratorium</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('app.profile') }}">Profil Lab</a>
                                    </li>
                                    <li><a href="{{ route('app.gallery') }}">Galeri</a>
                                    </li>
                                    <li><a href="{{ route('app.info') }}">Info</a>
                                    </li>
                                    <li><a href="{{ route('app.magang') }}">Program Magang</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('app.jadwal') }}">Jadwal Lab</a></li>
                            <li><a href="{{ route('app.kontak') }}">Kontak</a></li>
                            <li><a href="{{ route('login') }}">Masuk</a></li>
                        </ul>
                    </nav>
                    <!--/ #primary-nav-->
                </div>
            </div>
        </div>
    </header>
</div>