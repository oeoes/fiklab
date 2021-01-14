@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Gallery Edit')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Gallery Edit</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Perbarui Dokumentasi Kegiatan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gallery.update', ['image' => $image->id]) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input name="image" type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kegiatan</label>
                                <input name="name" value="{{ $image->name }}" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Kegiatan</label>
                                <input name="date" value="{{ $image->date }}" type="date" class="form-control">
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-outline-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection