@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Information')

@section('content')
<section class="our-services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{ asset('uploaded_file/activities') }}/{{ $activity->image }}" alt="Responsive-img" height="516" width="516">
                    </div>
                    <div class="sub-footer" style="background-color:  #f4f4f4; margin-top: 20px">
                        <p style="font-size: 20px; color: black">{{ $activity->title }}
                    </div>
                    <div class="left-content">
                        <div class="text-justify" style="font-size: 20px!important; margin-top: 30px">
                            {!! $activity->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection