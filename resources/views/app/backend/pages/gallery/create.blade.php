@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Gallery Add')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Gallery Add</h1>
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
                        Tambah Dokumentasi Kegiatan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input name="image" type="file" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kegiatan</label>
                                <input name="name" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Kegiatan</label>
                                <input name="date" type="date" class="form-control">
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-outline-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection