@extends('layouts.backend')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="my-2">
            <a href="/categories" class="btn btn-danger "><i class="fa-solid fa-arrow-left"></i> Back</a>
            <a href="/postingan/create/{{ $categories->id }}" class="btn btn-success "><i
                    class="fa-solid fa-pen-to-square"></i> Buat
                Postingan</a>
        </div>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/categories">Katagori</a></li>
          <li class="breadcrumb-item active">{{ $categories->name }} ({{ $post->count() }})</li>
        </ol>
      </nav>
      <div class="col-12">
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td><a href="/detail/{{ $row->id }}" class="text-primary fw-bold">{{ $row->nama }}</a>
                            </td>
                            <td>Rp {{ $row->harga }}</td>
                            <td>
                                @if($row->status == 1)
                                    <h5><a class="badge bg-primary" href="/postingan/d/{{ $row->id }}"><i class="fa-solid fa-arrows-to-circle"></i> Publish</a></h5>
                                @elseif($row->status == 2)
                                    <h5><a class="badge bg-danger" href="/postingan/p/{{ $row->id }}"><i class="fa-solid fa-arrows-to-circle"></i> Sedang Disewa</a> </h5>
                                @endif
                            </td>
                            <td>
                                <a href="/postingan/edit/{{ $row->id }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-clip"></i> Edit
                                </a>

                                <a href="/postingan/delete/{{ $row->id }}" class="btn btn-danger"><i
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
    </div>
  </div>



@endsection
