@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Data Guru</h2>

    <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">+ Tambah Guru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $guru)
            <tr>
                <td>{{ $guru->nama_guru }}</td>
                <td>{{ $guru->mata_pelajaran }}</td>
                <td>
                    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" style="display:inline">
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
