@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Tambah Siswa</h1>

        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
