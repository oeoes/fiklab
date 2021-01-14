@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Kegiatan')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kegiatan/Acara</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{ route('activity.create') }}" class="btn btn-sm btn-outline-primary">Tambah Kegiatan <i class="fa fa-plus ml-2"></i></a>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            @if(!count($activities))
            <div class="col-md-12 text-center text-muted d-flex justify-content-center">
                <div class="pr-3 pl-3" style="width: fit-content; border-bottom: 3px solid">Tidak ada data.</div>
            </div>
            @else
            @foreach($activities as $activity)
            <div class="col-md-12">
                <div class="card shadow p-3" style="position: relative;">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('uploaded_file/activities') }}/{{ $activity->image }}" alt="" width="100%">
                        </div>
                        <div class="col-md-9">
                            <div class="h2">{{ $activity->title }}</div>
                            <p>
                                {!! $activity->description !!}
                            </p>
                            <div class="mb-2">
                                <span class="btn btn-sm rounded-pill btn-outline-primary"><i class="fas mr-1 fa-map-marker"></i> {{ $activity->venue }}</span>
                            </div>
                            <div class="mb-2">
                                <span class="btn btn-sm rounded-pill btn-outline-info"><i class="fas mr-1 fa-calendar"></i> {{ $activity->date }}</span>
                            </div>
                            <div class="mb-2">
                                <span class="btn btn-sm rounded-pill btn-outline-success"><i class="fas mr-1 fa-clock"></i> {{ $activity->time }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="tools__container">
                        <a href="{{ route('activity.edit', ['activity' => $activity->id]) }}" class="btn btn-sm btn-outline-info rounded-pill pl-4 pr-4 text-center"><i class="fas fa-pen"></i></a>
                        <a href="{{ route('activity.delete', ['activity' => $activity->id]) }}" class="btn btn-sm btn-outline-danger rounded-pill pl-4 pr-4 text-center"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{ $activities }}
        </div>
    </div>
</section>
@endsection