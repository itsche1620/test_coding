@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Daftar Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>

        <!-- Tabel Siswa -->
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nama Siswa</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $s)
                    <tr>
                        <td>{{ $s->nama_siswa }}</td>
                        <td>{{ \Carbon\Carbon::parse($s->tanggal_lahir)->format('d-m-Y') }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Hapus Button -->
                            <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

