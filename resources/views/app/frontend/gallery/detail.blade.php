@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Gallery')

@section('content')
<!--Intro-->
<section class="featured-places" style="background-color: white; margin-top: 20px" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="progress" style="height: 5px; margin-top: 20px">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span style="font-size: 25px; color: black">{{ $parent->name }}</span>
                    <div class="progress" style="height: 5px; margin-top: 20px">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container" style="margin-top: -40px">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="text-center">
                    <a href="{{ asset('uploaded_file/gallery') }}/{{ $parent->image }}" class="perbesar">
                        <img src="{{ asset('uploaded_file/gallery') }}/{{ $parent->image }}" alt="" style="margin-top: 30px; width: 221px; height: 165.75px; margin-left: 30px">
                    </a>
                    @foreach($collections as $collection)
                    <a href="{{ asset('uploaded_file/gallery/collections') }}/{{ $collection->image }}" class="perbesar">
                        <img src="{{ asset('uploaded_file/gallery/collections') }}/{{ $collection->image }}" alt="" style="margin-top: 30px; width: 221px; height: 165.75px; margin-left: 30px">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!--Isi-->
<section class="our-services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-item">
                    <div class="left-content">
                        <p class="text-justify" style="font-size: 15px; margin-top: 30px">"Kegiatan pelatihan basis data dilakukan sebagai salah satu langkah pemahaman, penerapan, serta pembelajaran mengenai perkembangan ilmu basis data."</p>
                        <p>Waktu Pelaksanaan : 20 Juni 2020<br>Pukul : 09.00-12.00 WIB<br>Tempat Pelaksanaaan : Lab Basis Data</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection