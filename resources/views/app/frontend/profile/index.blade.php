@extends('app.frontend.layouts.master')

@section('title', 'FIK Laboratorium - Profile')

@section('content')
<!--profile 1-->
<section class="Profile" id="Profile">
    <div class="container">
        <div class="row">
            @if(!count($classes))
            <div class="col-md-12 text-center text-muted">
                <div class="h4">Tidak ada data.</div>
            </div>
            @else
            @foreach ($classes as $class)
            <div class="col-md-12">
                <div class="down-services">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="left-content">
                                <h4 style="font-size: 30px">{{ $class->class_name}}</h4>
                                <p class="text-justify" style="font-size: 15px; margin-top: 20px">{{ $class->description }}<br>
                                <ul class="list-group">
                                    @php
                                    $matkul = explode(';', $class->courses);
                                    @endphp
                                    @foreach($matkul as $m)
                                    <li class="list-group-item">{{ $m }}</li>
                                    @endforeach
                                </ul>
                                </p>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card" style="width: 35rem; padding-left: 50px; padding-top: 80px">
                                <img src="{{ asset('uploaded_file/classes') }}/{{ $class->image }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <p class="card-text" style="padding-top: 10px">Informasi terkait lab :</p>
                                </div>
                                <li class="list-group-item">Kepala Lab : {{ $class->head_lab }}</li>
                                <li class="list-group-item">Teknisi : {{ $class->technician }}</li>
                                <li class="list-group-item">Kapasitas : {{ $class->capacity }}</li>
                                <li class="list-group-item">Ruang : {{ $class->room }}</li>
                                </ul>
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