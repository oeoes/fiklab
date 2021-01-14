@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Gallery')

@section('custom-css')
<style type="text/css">
    .portfolio-main {
        padding: 30px 0px;
        height: 666.4px;

    }

    .portfolio-main h2 {
        font-weight: 600;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .portfolio-main .card {
        border: none;
        border-radius: 4px;
        overflow: hidden;
    }

    .portfolio-main .card .card-body .card-title {
        margin-bottom: 0px;
    }

    .portfolio-main .card .card-body .card-title a {
        font-size: 16px;
        font-weight: 400;
        text-transform: uppercase;
        color: black;
    }

    .portfolio-main .card .card-body {
        background: #6495ED;
        padding: 10px 20px;
    }

    .card-img {
        overflow: hidden;
        position: relative;
        height: 200px;
        width: 350px;
    }

    .overlay {
        background: rgba(78, 174, 58, 0.5);
        position: absolute;
        bottom: -100%;
        width: 100%;
        height: 100%;
        left: 50%;
        transform: translateX(-50%);
        transition: all 0.3s;
    }

    .overlay i {
        font-size: 35px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%);
        color: black;
    }

    .portfolio-main .card:hover .overlay {
        bottom: 0px;
    }

    .portfolio-item {
        margin-bottom: 30px;
    }

    .col-lg-4 .col-sm-6 .portfolio-item {
        width: 380px;
        height: 248.8px;
    }
</style>
@endsection

@section('content')
<div class="sub-footer" style="background-color:  #f4f4f4; margin-top: 50px">
    <p style="font-size: 20px; color: black">Kegiatan-kegiatan yang diadakan di FIK-Laboratorium</p>
</div>

<!--Folder Galeri-->
<section class="popular-places" id="popular">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="portfolio-main">
                    <div class="row">
                        @if(!count($galleries))
                        <div class="col-md-12 text-center text-muted">
                            <div class="h4">Tidak ada data.</div>
                        </div>
                        @else
                        @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-sm-6 portfolio-item">
                            <div class="card h-100" style="height: 248.8px; width: 350px">
                                <div class="card-img">
                                    <a href="#">
                                        <img class="card-img-top" src="{{ asset('uploaded_file/gallery') }}/{{ $gallery->image }}" alt="" />
                                        <div class="overlay"><i class="fa fa-arrows-alt"></i></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{ route('app.gallery_view', ['id' => $gallery->id]) }}">{{ $gallery->name }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection