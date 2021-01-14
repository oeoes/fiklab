@extends('app.backend.layouts.master')

@section('title', 'Dashboard - Add Program Magang')

@section('content')
<!-- preload -->
<div class="preload__container">
    <div class="text">Loading...</div>
</div>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Program Magang</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Program Magang
                    </div>
                    <div class="card-body">
                        <form id="myform">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input name="title" id="title" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sub judul</label>
                                        <input name="subtitle" id="subtitle" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Detail</label>
                                <textarea name="editor" class="form-control" id="editor"></textarea>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button id="simpan" class="btn btn-sm btn-outline-primary">Simpan</button>
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
            height: '30vh',
            editorplaceholder: 'Tulis di sini...'
        });

        var description = CKEDITOR.instances.editor.getData();
        const btnSave = document.querySelector('#simpan');

        document.querySelector('#myform').addEventListener('submit', (e) => {
            e.preventDefault();
        });

        btnSave.addEventListener('click', (e) => {
            preload.style.display = 'flex';
            preloadText.innerHTML = 'Saving...';

            e.preventDefault();
            var fd = new FormData();

            fd.append('title', document.querySelector('#title').value);
            fd.append('subtitle', document.querySelector('#subtitle').value);
            fd.append('detail', CKEDITOR.instances.editor.getData());

            axios.post('/app/admin/magang/store', fd).then((response) => {
                let data = response.data.status;
                if (data) {
                    setTimeout(() => {
                        preloadText.innerHTML = 'Saved.';
                    }, 2000);

                    setTimeout(() => {
                        location.href = '/app/admin/magang';
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