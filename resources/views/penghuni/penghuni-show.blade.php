@extends('admin.layout-admin')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lihat Data Penghuni</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $penghuni->nama }}" readonly>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <img src="{{ asset('storage/' . $penghuni->foto) }}" width="100" height="100" alt="">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" class="form-control" id="umur" value="{{ $penghuni->umur }}" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $penghuni->tanggal_lahir }}" readonly>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $penghuni->jenis_kelamin }}" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" class="form-control" id="status" value="{{ $penghuni->status }}" readonly>
                </div>
            </form>
        </div>
    </div>
@endsection

