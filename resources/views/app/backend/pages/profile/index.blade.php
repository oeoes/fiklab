@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Profile')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Lab Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{ route('profile.create') }}" class="btn btn-sm btn-outline-primary">Tambah Kelas <i class="fa fa-plus ml-2"></i></a>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            @if(!count($classes))
            <div class="col-md-12 text-center text-muted d-flex justify-content-center">
                <div class="pr-3 pl-3" style="width: fit-content; border-bottom: 3px solid">Tidak ada data.</div>
            </div>
            @else
            @foreach($classes as $class)
            <div class="col-md-12">
                <div class="card shadow p-3" style="position: relative;">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('uploaded_file/classes') }}/{{ $class->image }}" alt="" style="max-width: 100%;">
                        </div>
                        <div class="col-md-4">
                            <div class="h2">{{ $class->class_name }}</div>
                            <p>
                                {{ $class->description }}
                            </p>
                        </div>
                        <div class="col-md-2">
                            <div class="h4">Mata Kuliah</div>
                            <ul>
                                @php
                                $matkul = explode(';', $class->courses);
                                @endphp
                                @foreach($matkul as $m)
                                <li>{{ $m }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="h4">Class Info</div>
                            <ul>
                                <li>Kepala Lab : {{ $class->head_lab }}</li>
                                <li>Teknisi : {{ $class->technician }}</li>
                                <li>Kapasitas : {{ $class->capacity }} Orang</li>
                                <li>Ruangan : {{ $class->room }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="tools__container">
                        <a href="{{ route('profile.edit', ['class' => $class->id]) }}" class="btn btn-sm btn-outline-info ">Edit</a>
                        <a href="{{ route('profile.delete', ['class' => $class->id])}}" class="btn btn-sm btn-outline-danger ">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{ $classes }}
        </div>
    </div>
</section>
@endsection