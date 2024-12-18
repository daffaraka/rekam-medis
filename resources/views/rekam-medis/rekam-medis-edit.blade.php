@extends('admin.layout-admin')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rekam Medis</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('rekam-medis.update', $rekam->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama Pasien</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" value="{{ old('nama', $rekam->penghuni->nama) }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea name="keluhan" class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" rows="3">{{ old('keluhan', $rekam->keluhan) }}</textarea>
                    @error('keluhan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="diagnosis">Diagnosis</label>
                    <textarea name="diagnosis" class="form-control @error('diagnosis') is-invalid @enderror" id="diagnosis" rows="3">{{ old('diagnosis', $rekam->diagnosis) }}</textarea>
                    @error('diagnosis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_tindakan">Tanggal Tindakan</label>
                    <input type="date" name="tanggal_tindakan"
                        class="form-control @error('tanggal_tindakan') is-invalid @enderror" id="tanggal_tindakan"
                        value="{{ old('tanggal_tindakan', $rekam->tanggal_tindakan) }}">
                    @error('tanggal_tindakan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                        <option value="">-- Pilih Status --</option>
                        <option value="Sehat" {{ old('status', $rekam->status) == 'Sehat' ? 'selected' : '' }}>Sehat</option>
                        <option value="Dalam perawatan" {{ old('status', $rekam->status) == 'Dalam perawatan' ? 'selected' : '' }}>Dalam
                            Perawatan</option>
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
