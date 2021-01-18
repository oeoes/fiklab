<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Edit Landing Page</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/fe/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/fontAwesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/hero-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fe/templatemo-style.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/fe/style1.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    <style>
        body {
            font-family: 'Raleway';
        }
    </style>
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/slick/slick-theme.css') }}" rel="stylesheet">

    <style type="text/css">
        .videowrapper {
            float: none;
            clear: both;
            width: 100%;
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 25px;
            height: 0;
        }

        .videowrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        section#video-container {
            margin-top: 127px !important;
        }
    </style>
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/fe/style1.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    <style>
        body {
            font-family: 'Raleway';
        }
    </style>


</head>

<body>

    <!--Slider-->
    <div class="top-news" style="background-color:  #f4f4f4; height: 560px; padding: 0!important">
        <div class="blue-button mb-4 d-flex justify-content-between">
            <a href="{{ route('profile.index') }}"><i class="fas fa-arrow-left mr-3"></i> Back</a>
            <a href="{{ route('app.home') }}">View Page <i class="fas fa-arrow-right ml-3"></i></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row tn-slider">
                        @foreach($sliders as $slider)
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="{{ asset('uploaded_file/gallery/sliders') }}/{{ $slider->image }}" style="height: 500px" />
                                <div class="tn-title">
                                    <a style="font-size: 30px">
                                        {{ $slider->title }}<br>{{ $slider->subtitle }}
                                    </a>
                                    <a class="btn btn-sm" style="display: inline; width:fit-content" href="{{ route('home.delete-slider', ['slider' => $slider->id]) }}"><i class="fas fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="blue-button">
                    <a href="{{ route('home.slider-page') }}"><i class="fas fa-plus mr-3"></i> Add Image</a>
                </div>
            </div>
        </div>
    </div>

    <!--vid yutub-->
    <section id="video-container">
        <div class="video-content">
            <div class="container">
                <div class="d-flex justify-content-start">
                    <div class="blue-button">
                        <a href="{{ route('home.video-page') }}"><i class="fas fa-plus mr-3"></i> Change Youtube URL</a>
                    </div>
                </div>
                <div class="videowrapper">
                    <iframe width="854" height="550" src="{{ $y_p->youtube_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--Profile-->
    <section class="Profile" id="Profile" style="margin-top: -50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="down-services">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="left-content">
                                    <div class="d-flex justify-content-start mb-2">
                                        <div class="blue-button">
                                            <a href="{{ route('home.profile_tab-page') }}"><i class="fas fa-pen mr-3"></i> Change Text</a>
                                        </div>
                                    </div>
                                    @php
                                    $prof = explode('|', $y_p->profile_section)
                                    @endphp
                                    <h4 style="font-size: 30px"><i class="fa fa-university" aria-hidden="true"></i> <span>Profil Lab</span></h4>
                                    <h4 style="font-size: 20px; margin-top: 30px">{{ $prof[0] }}</h4>
                                    <p style="font-size: 15px" placeholder="Description">{{ $prof[1] }}</p>
                                    <div class="blue-button" style="margin-top: 50px">
                                        <a href="{{ route('app.profile') }}">Detail Profil</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4 style="font-size: 30px; color: black"><i class="fa fa-info-circle" aria-hidden="true"></i> Info Lab</h4>
                                <hr size="10px" width="100%" color="grey" align="left">
                                <div class="accordions">
                                    <ul class="accordion">
                                        @if(!count($activities))
                                        <li>
                                            <a>Tidak ada data.</a>
                                        </li>
                                        @else
                                        @foreach ($activities as $activity)
                                        <li>
                                            <a>{{ $activity->title }}</a>
                                            <p>{{ $activity->date }}<br>{{ $activity->subtitle }}</p>
                                        </li>
                                        @endforeach
                                        @endif
                                    </ul>
                                    <!--/ accordion-->
                                </div>
                                <a href="{{ route('app.info') }}" style="font-size: 15px; color: black">Info Selengkapnya</a><i class="fa fa-chevron-circle-right" aria-hidden="true" style="padding-left: 5px"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr size="10px" width="100%" color="black" align="left" style="margin-top: 40px">
    </section>



    <!--Galeri Lab-->
    <div class="row" style="margin-top: 30px">
        <div class="top-news" style="height: 650px; margin-top: 10px;">
            <div class="container">
                <div class="row">
                    <div class="box">
                        <div class="col-md-12">
                            <div class="container" style="text-align: center; display: inline-block">
                                <i class="fa fa-file-image-o fa-2x" aria-hidden="true"></i><a style="font-size: 30px; color: black; padding-left: 5px">Galeri Lab</a>
                            </div>
                            <div class="row tn-slider" style="width: 700px; margin-top: 30px;">
                                @if(!count($galleries))
                                <div class="col-md-12 text-center text-muted">
                                    <div class="h3">Tidak ada data.</div>
                                </div>
                                @else
                                @foreach($galleries as $gallery)
                                <div class="col-md-6">
                                    <div class="tn-img">
                                        <img src="{{ asset('uploaded_file/gallery') }}/{{ $gallery->image }}" style="width: 700px; height: 400px" />
                                        <div class="tn-title">
                                            <a href="{{ route('app.gallery_view', ['id' => $gallery->id]) }}" style="font-size: 20px">{{ $gallery->name }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <div class="blue-button" style="margin-top: 30px">
                                <a href="{{ route('app.gallery') }}">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Footer-->
    <footer style="background-color:  #f4f4f4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-veno">
                        <img src="{{ asset('images/slider/upn.webp') }}" alt="" style="width: 80px;margin-left: 70px"><img src="{{ asset('images/slider/logolab.png') }}" alt="" style="width: 80px; margin-left: 20px">
                        <p style="font-size: 20px; color: black; padding-top: 10px">FIK-Laboratorium UPN Veteran Jakarta</p>
                        <p style="font-size: 15px; color: black">Jl. RS. Fatmawati Raya No.1, RT.1/RW.1, Pd. Labu, Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430.</p>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Kontak Kami</h4>
                        </div>
                        <ul>
                            <li><i class="fa fa-phone-square fa-2x" aria-hidden="true" style="margin-right: 10px; color: #6495ED"></i><a href="#">(021) 7656971</a></li>
                            <li><i class="fa fa-envelope fa-2x" aria-hidden="true" style="margin-right: 10px; color: #6495ED"></i><a href="#">labfik@upnvj.ac.id</a></li>
                            <li><i class="fab fa-instagram fa-2x" aria-hidden="true" style="margin-right: 10px; color: #6495ED"></i><a href="#">@fikupnvj</a></li>
                            <li><i class="fab fa-twitter fa-2x" aria-hidden="true" style="margin-right: 10px; color: #6495ED"></i><a href="#">@fik_upnvj</a></li>
                            <li><i class="fa fa-globe fa-2x" aria-hidden="true" style="margin-right: 10px; color: #6495ED"></i><a href="https://fik.upnvj.ac.id/">fik.upnvj.ac.id</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <div class="sub-footer" style="background-color:  black">
        <p>Copyright &copy; 2020 NS & RIP
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('js/lib/slick/slick.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/js/main.js') }}"></script>

    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>