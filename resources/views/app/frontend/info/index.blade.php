@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Information')

@section('content')
<!--isi-->
<section class="featured-places" style="background-color: white; margin-top: 20px" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="progress" style="height: 8px; margin-top: 20px">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <span style="font-size: 25px; color: black">Info Kegiatan</span>
                    <div class="progress" style="height: 8px; margin-top: 20px">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px">
            @if(!count($activities))
            <div class="col-md-12 text-center text-muted">
                <div class="h4">Tidak ada data.</div>
            </div>
            @else
            @foreach($activities as $activity)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="featured-item">
                    <div class="thumb">
                        <img src="{{ asset('uploaded_file/activities') }}/{{ $activity->image }}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>{{ $activity->title }}</h4>
                        <p style="padding-top: 10px">{{ $activity->subtitle }}</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-button" style="background-color:  #f4f4f4">
                                    <a href="{{ route('app.info_view', ['id' => $activity->id]) }}">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection