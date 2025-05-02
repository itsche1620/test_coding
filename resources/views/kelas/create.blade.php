@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Tambah Kelas</h2>

    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
