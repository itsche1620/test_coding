@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Edit Siswa</h1>

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" name="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
