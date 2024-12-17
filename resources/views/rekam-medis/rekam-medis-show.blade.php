@extends('admin.layout-admin')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Data Rekam Medis</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Pasien</label>
                <input type="text" class="form-control" id="nama" value="{{ $rekam->nama }}" readonly>
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <textarea class="form-control" id="keluhan" rows="3" readonly>{{ $rekam->keluhan }}</textarea>
            </div>
            <div class="form-group">
                <label for="diagnosis">Diagnosis</label>
                <textarea class="form-control" id="diagnosis" rows="3" readonly>{{ $rekam->diagnosis }}</textarea>
            </div>
            <div class="form-group">
                <label for="tanggal_tindakan">Tanggal Tindakan</label>
                <input type="date" class="form-control" id="tanggal_tindakan" value="{{ $rekam->tanggal_tindakan }}" readonly>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" disabled>
                    <option value="">-- Pilih Status --</option>
                    <option value="sehat" {{ $rekam->status == 'sehat' ? 'selected' : '' }}>Sehat</option>
                    <option value="dalam perawatan" {{ $rekam->status == 'dalam perawatan' ? 'selected' : '' }}>Dalam
                        Perawatan</option>
                </select>
            </div>
        </div>
    </div>
@endsection

