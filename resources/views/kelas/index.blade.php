@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Data Kelas</h2>

    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">+ Tambah Kelas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $kela)
            <tr>
                <td>{{ $kela->nama_kelas }}</td>
                <td>{{ $kela->jurusan }}</td>
                <td>
                    <a href="{{ route('kelas.edit', $kela->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('kelas.destroy', $kela->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
