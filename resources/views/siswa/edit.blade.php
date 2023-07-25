@extends('layouts.app')

@section('title', 'Edit Data Siswa')

@section('contents')
    <hr />
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nama Siswa</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" value="{{ $siswa->nama }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{ $siswa->kelas }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"
                    value="{{ $siswa->tempat_lahir }}">
            </div>
            <div class="col">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir"
                    value="{{ $siswa->tgl_lahir }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin"
                    value="{{ $siswa->jenis_kelamin }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $siswa->alamat }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">No. Telp</label>
                <input type="number" name="telp" class="form-control" placeholder="No. Telp"
                    value="{{ $siswa->telp }}">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
