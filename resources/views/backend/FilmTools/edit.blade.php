@extends('layouts.backend')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit {{ $alatFilm->nama }}</h5>
            <form action="/postingan/update/{{ $alatFilm->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Alat</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{ $alatFilm->nama }}">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
                    <span class="input-group-text">Rp</span>
                    <input type="text" name="harga" class="form-control" aria-label="Amount (to the nearest dollar)"
                        value="{{ $alatFilm->harga }}">
                </div>

                <div class="control-group" >
                    <div class="controls">
                        <div class="entry input-group upload-input-group">
                            <input class="form-control" name="fields-1" type="file">
                        </div>
                        <img src="{{ asset('storage/' . $alatFilm->{'img-1'} ) }}" alt="{{ $alatFilm->{'img-1'} }}"
                        style="max-width: 100px; max-height: 100px;" class="rounded">
                    </div>
                </div>
                <div class="control-group mt-2" >
                    <div class="controls">
                        <div class="entry input-group upload-input-group">
                            <input class="form-control" name="fields-2" type="file">
                        </div>
                        <img src="{{ asset('storage/' . $alatFilm->{'img-2'} ) }}" alt="{{ $alatFilm->{'img-2'} }}"
                        style="max-width: 100px; max-height: 100px;" class="rounded">
                    </div>
                </div>
                <div class="control-group mt-2" >
                    <div class="controls">
                        <div class="entry input-group upload-input-group">
                            <input class="form-control" name="fields-3" type="file">
                        </div>
                        <img src="{{ asset('storage/' . $alatFilm->{'img-3'} ) }}" alt="{{ $alatFilm->{'img-3'} }}"
                        style="max-width: 100px; max-height: 100px;" class="rounded">
                    </div>
                </div>
                <div class="control-group mt-2" >
                    <div class="controls">
                        <div class="entry input-group upload-input-group">
                            <input class="form-control" name="fields-4" type="file">
                        </div>
                        <img src="{{ asset('storage/' . $alatFilm->{'img-4'} ) }}" alt="{{ $alatFilm->{'img-4'} }}"
                        style="max-width: 100px; max-height: 100px;" class="rounded">
                    </div>
                </div>
                <div class="control-group mt-2" >
                    <div class="controls">
                        <div class="entry input-group upload-input-group">
                            <input class="form-control" name="fields-5" type="file">
                        </div>
                        <img src="{{ asset('storage/' . $alatFilm->{'img-5'} ) }}" alt="{{ $alatFilm->{'img-5'} }}"
                        style="max-width: 100px; max-height: 100px;" class="rounded">
                    </div>
                </div>

                <div class="card-body h-10">
                    <h5 class="card-title">Keterangan Product</h5>
                    <textarea name="desc" class="tinymce-editor">{{ $alatFilm->desc }}</textarea>
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
