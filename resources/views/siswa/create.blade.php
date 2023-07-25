@extends('layouts.app')

@section('title', 'Create Data Siswa')

@section('contents')
    <hr />
    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kelas" class="form-control" placeholder="Kelas">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
            </div>
            <div class="col">
                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="telp" class="form-control" placeholder="No. Telp">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
