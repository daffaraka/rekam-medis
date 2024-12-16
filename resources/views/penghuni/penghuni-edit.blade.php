@extends('admin.layout-admin')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Penghuni</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('penghuni.update', $penghuni->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" value="{{ old('nama', $penghuni->nama) }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" accept="image/*" name="foto" class="form-control @error('foto') is-invalid @enderror"
                        id="foto">
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror"
                        id="umur" value="{{ old('umur', $penghuni->umur) }}">
                    @error('umur')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                        id="tanggal_lahir" value="{{ old('tanggal_lahir', $penghuni->tanggal_lahir) }}">
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin', $penghuni->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin', $penghuni->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                        <option value="">-- Pilih Status --</option>
                        <option value="Aktif" {{ old('status', $penghuni->status) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="Dirawat Inap" {{ old('status', $penghuni->status) == 'Dirawat Inap' ? 'selected' : '' }}>Dirawat Inap</option>
                        <option value="Keluar" {{ old('status', $penghuni->status) == 'Keluar' ? 'selected' : '' }}>Keluar</option>
                        <option value="Meninggal Dunia" {{ old('status', $penghuni->status) == 'Meninggal Dunia' ? 'selected' : '' }}>Meninggal Dunia</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

