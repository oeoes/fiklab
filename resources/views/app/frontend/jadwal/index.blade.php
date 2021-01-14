@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Jadwal')

@section('content')
<div class="sub-footer" style="background-color:  #f4f4f4; margin-top: 50px">
    <p style="font-size: 20px; color: black">Jadwal Praktikum FIK-Laboratorium UPN Veteran Jakarta</p>
</div>


<!--Isi-->
<section class="our-services" id="services">
    <div class="container">
        <div class="row">
            @if(!count($schedules))
            <div class="col-md-12 text-center text-muted">
                <div class="h4">Tidak ada data.</div>
            </div>
            @else
            @foreach($schedules as $schedule)
            <div class="col-md-12">
                <div class="service-item">
                    <div class="icon">
                        <img src="img/service_icon_1.png" alt="">
                        <p style="font-size: 20px; color: black; margin-top: 20px">{{ $schedule->title }}</p>
                    </div>
                    <a href="{{ asset('uploaded_file/schedule') }}/{{ $schedule->image }}" class="perbesar">
                        <img src="{{ asset('uploaded_file/schedule') }}/{{ $schedule->image }}" alt="" style="margin-top: 30px; width: 700px; height: 500px">
                    </a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection