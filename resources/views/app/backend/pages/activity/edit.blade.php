@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Edit Kegiatan')

@section('content')
<!-- preload -->
<div class="preload__container">
    <div class="text">Loading...</div>
</div> 

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Kegiatan</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Deskripsi Kegiatan/Acara
                    </div>
                    <div class="card-body">
                        <textarea name="editor" class="form-control form-control-sm" id="editor">{{ $activity->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kegiatan/Acara
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" id="myform">
                            <div class="form-group">
                                <label for="">Nama Kegiatan/Acara</label>
                                <input name="title" id="title" type="text" value="{{ $activity->title }}" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input name="image" id="file" type="file" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="">Selogan/Kata Pembuka</label>
                                <input name="subtitle" id="subtitle" type="text" value="{{ $activity->subtitle }}" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tempat</label>
                                <input name="venue" id="venue" type="text" value="{{ $activity->venue }}" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input name="date" id="date" type="date" value="{{ $activity->date }}" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="">Waktu</label>
                                <input name="time" id="time" type="time" value="{{ $activity->time }}" class="form-control form-control-sm" required>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button id="perbarui" class="btn btn-sm btn-outline-primary">Perbarui</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('custom-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    window.onload = () => {
        'use strict';

        const preload = document.querySelector('.preload__container');
        const preloadText = document.querySelector('.text');
        // hide preload
        setTimeout(() => {
            preload.style.display = 'none';
        }, 1000);

        CKEDITOR.replace('editor', {
            height: '57vh',
            editorplaceholder: 'Tulis di sini...'
        });

        const activity_id = '{{ $activity->id }}';

        var description = CKEDITOR.instances.editor.getData();
        const btnSave = document.querySelector('#perbarui');

        document.querySelector('#myform').addEventListener('submit', (e) => {
            e.preventDefault();
        });

        btnSave.addEventListener('click', (e) => {
            preload.style.display = 'flex';
            preloadText.innerHTML = 'Updating...';

            e.preventDefault();
            var fd = new FormData();
            var image = $('#file')[0].files;

            if (image.length > 0) {
                fd.append('image', image[0]);
            }

            fd.append('title', document.querySelector('#title').value);
            fd.append('subtitle', document.querySelector('#subtitle').value);
            fd.append('description', CKEDITOR.instances.editor.getData());
            fd.append('venue', document.querySelector('#venue').value);
            fd.append('date', document.querySelector('#date').value);
            fd.append('time', document.querySelector('#time').value);

            axios.post(`/app/admin/activity/update/${activity_id}`, fd).then((response) => {
                let data = response.data.status;
                if (data) {
                    setTimeout(() => {
                        preloadText.innerHTML = 'Updated.';
                    }, 2000);

                    setTimeout(() => {
                        location.href = '/app/admin/activity';
                    }, 4000);
                } else {
                    setTimeout(() => {
                        preloadText.innerHTML = 'Something went wrong.';
                    }, 2000);
                    console.log(response);
                }
            }).catch((error) => {
                console.log(error);
            }).finally(() => {
                setTimeout(() => {
                    preload.style.display = 'none';
                }, 3000);
            });

        });
    }
</script>
@endsection