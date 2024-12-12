@extends('admin.layout-admin')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rekam Medis</h6>
        </div>
        <div class="card-body">
            <a href="{{route('rekam-medis.create')}}" class="btn btn-primary mt-2 mb-4">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th>Diagnosis</th>
                            <th>Tanggal Periksa</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->keluhan }}</td>
                                <td>{{ $item->diagnosis }}</td>
                                <td>{{ $item->tanggal_tindakan }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="rekam-medis/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    {{-- <a href="rekam-medis/{{ $item->id }}" class="btn btn-info btn-sm">Lihat</a> --}}
                                    <form action="{{route('rekam-medis.destroy',$item->id)}}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
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
