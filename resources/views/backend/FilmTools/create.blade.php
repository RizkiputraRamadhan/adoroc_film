@extends('layouts.backend')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="p-">
                <a href="/postingan/{{ $categories->id }}" class="btn btn-danger "><i class="fa-solid fa-arrow-left"></i> Back to list</a>
            </div>
            <h5 class="card-title">Buat Postingan Dengan Katagori {{ $categories->name }}</h5>
            <form action="/postingan/{{ $categories->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Alat</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
                    <span class="input-group-text">Rp</span>
                    <input type="text" name="harga" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Foto Alat</label>
                    <div class="col-sm-10">
                        <div class="row form-group">
                            <div class="">
                                <div class="control-group" id="fields">
                                    <div class="controls">
                                        <div class="entry input-group upload-input-group">
                                            <input class="form-control" name="fields[]" type="file">
                                            <button class="btn btn-upload btn-success btn-add" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body h-10">
                    <h5 class="card-title">Keterangan Product</h5>
                    <textarea name="desc" class="tinymce-editor"></textarea>
                </div>
                <div class="row mb-3 ">
                    <div class=" text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
