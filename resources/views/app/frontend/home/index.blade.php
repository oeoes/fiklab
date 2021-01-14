@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Home')

@section('custom-css')
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
</style>
@endsection

@section('content')
<!--Slider-->
<div class="top-news" style="background-color:  #f4f4f4; height: 560px; margin-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row tn-slider">
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{ asset('images/slider/lab6.jpeg') }}" style="height: 500px" />
                            <div class="tn-title">
                                <a style="font-size: 30px">Selamat Datang<br>di Website FIK-Laboratorium UPN Veteran Jakarta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{ asset('images/slider/4b.png') }}" style="height: 500px" />
                            <div class="tn-title">
                                <a style="font-size: 30px">Selamat Datang<br>di Website FIK-Laboratorium UPN Veteran Jakarta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{ asset('images/slider/lab9.jpeg') }}" style="height: 500px" />
                            <div class="tn-title">
                                <a style="font-size: 30px">Selamat Datang<br>di Website FIK-Laboratorium UPN Veteran Jakarta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{ asset('images/slider/lab13.jpeg') }}" style="height: 500px" />
                            <div class="tn-title">
                                <a style="font-size: 30px">Selamat Datang<br>di Website FIK-Laboratorium UPN Veteran Jakarta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--vid yutub-->
<section id="video-container">
    <div class="video-content">
        <div class="container">
            <div class="videowrapper">
                <iframe width="854" height="550" src="https://www.youtube.com/embed/NpZgAtCTjMA?start=15" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                <h4 style="font-size: 30px"><i class="fa fa-university" aria-hidden="true"></i> Profil Lab</h4>
                                <h4 style="font-size: 20px; margin-top: 30px">FIK-Laboratorium UPN Veteran Jakarta</h4>
                                <p style="font-size: 15px">Fakultas Ilmu Komputer UPN Veteran Jakarta memiliki fasilitas berupa laboratorium komputer dan laboratorium riset.</p>
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
@endsection