@extends('layouts.backend')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Akun Pegawai</h5>
            <form class="row g-3" action="/pegawai/store" method="post">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                        <input name="name" type="text" class="form-control"
                            placeholder="Nama katagory">
                        <label for="floatingName">Nama</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input name="email" type="email" class="form-control"
                            placeholder="email">
                        <label for="floatingName">Email</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control"
                            placeholder="password">
                        <label for="floatingName">Password</label>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card-body">
                        <h5 id="namaCategories" class="card-title"></h5>
                        <form class="row g-3" action="/pegawai/update" method="post">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input id="nameUser" name="name" type="text" class="form-control font-bold"
                                        placeholder="Nama katagory">
                                    <input id="idUser" name="id" type="text" class="form-control d-none">
                                    <label>Nama katagory</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input id="email" name="email" type="email" class="form-control"
                                        placeholder="email">
                                    <label for="floatingName">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input name="password" type="password" class="form-control"
                                        placeholder="password">
                                    <label for="floatingName">Password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Daftar Akun Pegawai</h5>

                <table class="table table-borderless">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr class="text-center">
                                <th>{{ $loop->iteration }}</th>
                                <td class="text-primary fw-bold">{{ $row->name }}</td>
                                <td class="text-primary fw-bold">{{ $row->email }}</td>
                                <td>
                                    <button onclick="editUser('{{ $row->id }}', '{{ $row->name }}', '{{ $row->email }}')" type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#basicModal">
                                        <i class="fa-solid fa-pen-clip"></i> Edit
                                    </button>

                                    <a href="/pegawai/delete/{{ $row->id }}" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
