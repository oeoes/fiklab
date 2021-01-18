@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Gallery')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Gallery</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-outline-primary">Tambah Gallery <i class="fa fa-plus ml-2"></i></a>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            @if(!count($images))
            <div class="col-md-12 text-center text-muted d-flex justify-content-center">
                <div class="pr-3 pl-3" style="width: fit-content; border-bottom: 3px solid">Tidak ada data.</div>
            </div>
            @else
            @foreach ($images as $image)
            <div class="col-md-3">
                <div class="card" style="position: relative;">
                    <img class="card-image-top" src="{{ asset('uploaded_file/gallery') }}/{{ $image->image }}" alt="" style="max-width: 100%; height: 170px">
                    <div class="h5 p-2">
                        {{ $image->name }}
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('gallery.edit', ['image' => $image->id]) }}" class="btn btn-sm rounded-pill pr-3 pl-3 btn-outline-info "><i class="fas fa-pen"></i></a>
                        <a href="{{ route('gallery.delete', ['image' => $image->id]) }}" class="btn btn-sm rounded-pill pr-3 pl-3 btn-outline-danger "><i class="fas fa-trash"></i></a>
                        <a href="{{ route('gallery.view', ['id' => $image->id]) }}" class="btn btn-sm rounded-pill pr-3 pl-3 btn-outline-primary "><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{ $images }}
        </div>
    </div>
    </div>
</section>
@endsection