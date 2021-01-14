<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>

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

    @yield('custom-css')
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


    <!--Navbar-->
    @include('app.frontend.layouts.navbar')


    @yield('content')


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