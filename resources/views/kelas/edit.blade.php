@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Edit Kelas</h2>

    <form action="{{ route('kelas.update', $kela->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="{{ $kela->nama_kelas }}" required>
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $kela->jurusan }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
