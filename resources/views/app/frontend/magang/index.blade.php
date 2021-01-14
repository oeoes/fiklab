@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Magang')

@section('content')
<section class="our-services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="sub-footer" style="background-color:  #f4f4f4">
                                <p style="font-size: 20px; color: black">Program Magang FIK-Laboratorium Universitas Pembangunan Nasional Veteran Jakarta</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group" style="margin-top: 40px">
                    @if(!count($internships))
                    <div class="col-md-12 text-center text-muted">
                        <div class="h4">Tidak ada data.</div>
                    </div>
                    @else
                    @foreach ($internships as $internship)
                    <a href="{{ route('app.magang_view', ['id' => $internship->id]) }}" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $internship->title }}</h5>
                            <div class="progress" style="height: 5px; margin-top: 20px">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>{{ $internship->created_at->parse()->format('Y-m-d') }}</small>
                        </div>
                        <p class="mb-1">{{ $internship->subtitle }}</p>
                    </a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection