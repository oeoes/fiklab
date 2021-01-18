@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Jadwal Praktikum')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Jadwal Praktikum</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{ route('schedule.create') }}" class="btn btn-sm btn-outline-primary">Upload Jadwal<i class="fa fa-upload ml-2"></i></a>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            @if(!count($schedules))
            <div class="col-md-12 text-center text-muted d-flex justify-content-center">
                <div class="pr-3 pl-3" style="width: fit-content; border-bottom: 3px solid">Tidak ada data.</div>
            </div>
            @else
            @foreach($schedules as $schedule)
            <div class="col-md-12">
                <div class="card p-3" style="position: relative;">
                    <div class="row">
                        <div class="h2">{{ $schedule->title }}</div>
                        <div class="col-md-12">
                            <img src="{{ asset('uploaded_file/schedule') }}/{{ $schedule->image }}" alt="" style="max-width: 100%">
                        </div>
                    </div>

                    <div class="tools__container">
                        <a href="{{ route('schedule.delete', ['schedule' => $schedule->id]) }}" class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection