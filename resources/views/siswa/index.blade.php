@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Add Data Siswa</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($siswa->count() > 0)
                @foreach ($siswa as $s)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $s->nama }}</td>
                        <td class="align-middle">{{ $s->kelas }}</td>
                        <td class="align-middle">{{ $s->tempat_lahir }}</td>
                        <td class="align-middle">{{ $s->tgl_lahir }}</td>
                        <td class="align-middle">{{ $s->jenis_kelamin }}</td>
                        <td class="align-middle">{{ $s->alamat }}</td>
                        <td class="align-middle">{{ $s->telp }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('siswa.show', $s->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('siswa.edit', $s->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete this siswa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="9">Siswa not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
