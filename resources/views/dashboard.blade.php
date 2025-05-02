@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Welcome, {{ Auth::user()->name }}</h2>

        <!-- Statistik -->
        <div class="row mt-4">
            <!-- Jumlah Kelas -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Kelas</h5>
                        <p class="card-text">{{ \App\Models\Kelas::count() }}</p>
                    </div>
                </div>
            </div>

            <!-- Jumlah Guru -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Guru</h5>
                        <p class="card-text">{{ \App\Models\Guru::count() }}</p>
                    </div>
                </div>
            </div>

            <!-- Jumlah Murid -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Murid</h5>
                        <p class="card-text">{{ \App\Models\Siswa::count() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
