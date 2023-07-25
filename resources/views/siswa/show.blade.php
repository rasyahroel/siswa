@extends('layouts.app')

@section('title', 'Show Siswa')

@section('contents')
    <hr />
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Nama Siswa</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" value="{{ $siswa->nama }}"
                readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{ $siswa->kelas }}"
                readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"
                value="{{ $siswa->tempat_lahir }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Tanggal Lahir</label>
            <input type="text" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir"
                value="{{ $siswa->tgl_lahir }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin"
                value="{{ $siswa->jenis_kelamin }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $siswa->alamat }}"
                readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">No. Telp</label>
            <input type="text" name="telp" class="form-control" placeholder="No. Telp" value="{{ $siswa->telp }}"
                readonly>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{ route('siswa') }}" class="btn btn-primary">Back to All Siswa</a>
        </div>
    </div>
@endsection
