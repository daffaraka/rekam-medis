@extends('admin.layout-admin')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penghuni</h6>
        </div>
        <div class="card-body">
            @if (Auth::user()->role == 'Admin')
                <a href="{{ route('penghuni.create') }}" class="btn btn-primary mt-2 mb-4">Tambah Data</a>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Umur</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td><img src="{{ url($item->foto) }}" width="100" alt=""></td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    @if (Auth::user()->role == 'Admin')
                                        <a href="penghuni/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    @endif
                                    <a href="penghuni/{{ $item->id }}" class="btn btn-info btn-sm">Lihat</a>
                                    <form action="{{ route('penghuni.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
