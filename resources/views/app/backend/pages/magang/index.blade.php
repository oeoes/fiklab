@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Program Magang')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Program Magang</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{ route('magang.create') }}" class="btn btn-sm btn-outline-primary">Tambah Program Magang <i class="fa fa-plus ml-2"></i></a>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            @if(!count($internships))
            <div class="col-md-12 text-center text-muted d-flex justify-content-center">
                <div class="pr-3 pl-3" style="width: fit-content; border-bottom: 3px solid">Tidak ada data.</div>
            </div>
            @else
            @foreach($internships as $internship)
            <div class="col-md-12">
                <div class="card p-3" style="position: relative;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="h2">{{ $internship->title }}</div>
                            <div class="h5 text-muted">{{ $internship->subtitle }}</div>
                            <p>
                                {!! $internship->detail !!}
                            </p>
                        </div>
                    </div>

                    <div class="tools__container">
                        <a href="{{ route('magang.edit', ['internship' => $internship->id]) }}" class="btn btn-sm btn-outline-info ">Edit</a>
                        <a href="{{ route('magang.delete', ['internship' => $internship->id]) }}" class="btn btn-sm btn-outline-danger ">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{ $internships }}
        </div>
    </div>
</section>
@endsection