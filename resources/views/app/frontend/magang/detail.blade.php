@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Magang')

@section('content')
<section class="popular-places" id="popular">
    <div class="container-fluid">
        <div class="row">
            <div class="sub-footer" style="background-color:  #f4f4f4">
                <p style="font-size: 20px; color: black">{{ $internship->title }}</p>
            </div>
            <div class="col-md-5 col-md-offset-1" style="padding-top: 30px">
                {!! $internship->detail !!}
            </div>
        </div>
    </div>
</section>
@endsection