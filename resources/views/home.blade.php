@extends('layouts.app_modern')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="fw-bold">Dashboard</h3>
            <p class="text-muted">
                Selamat datang di Sistem Informasi Klinik
            </p>
        </div>
    </div>


    {{-- Statistik --}}
    <div class="row">

        {{-- Total Pasien --}}
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>
                            <h6 class="text-muted">Total Pasien</h6>

                            <h2 class="fw-bold">
                                {{ $jumlahPasien }}
                            </h2>
                        </div>

                        <div class="bg-primary text-white rounded p-3">
                            <i class="fas fa-users fa-lg"></i>
                        </div>

                    </div>

                    <a href="{{ route('pasien.index') }}"
                       class="btn btn-sm btn-primary mt-3">
                        Lihat Pasien
                    </a>

                </div>
            </div>
        </div>


        {{-- Total Poli --}}
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>
                            <h6 class="text-muted">Total Poli</h6>

                            <h2 class="fw-bold">
                                {{ $jumlahPoli }}
                            </h2>
                        </div>

                        <div class="bg-success text-white rounded p-3">
                            <i class="fas fa-hospital fa-lg"></i>
                        </div>

                    </div>

                    <a href="{{ route('poli.index') }}"
                       class="btn btn-sm btn-success mt-3">
                        Lihat Poli
                    </a>

                </div>
            </div>
        </div>


        {{-- Total Pendaftaran --}}
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>
                            <h6 class="text-muted">Total Pendaftaran</h6>

                            <h2 class="fw-bold">
                                {{ $jumlahDaftar }}
                            </h2>
                        </div>

                        <div class="bg-warning text-white rounded p-3">
                            <i class="fas fa-clipboard-list fa-lg"></i>
                        </div>

                    </div>

                    <a href="{{ route('daftar.index') }}"
                       class="btn btn-sm btn-warning mt-3">
                        Lihat Pendaftaran
                    </a>

                </div>
            </div>
        </div>

    </div>


    {{-- ========================= --}}
    {{-- CHART --}}
    {{-- ========================= --}}

    <div class="row mb-4">

        {{-- Bar Chart --}}
        <div class="col-md-8 mb-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-header bg-white">
                    <h5 class="mb-0 fw-bold">
                        Statistik Klinik
                    </h5>

                    <small class="text-muted">
                        Jumlah data pasien, poli dan pendaftaran
                    </small>
                </div>

                <div class="card-body">

                    <div style="height: 350px;">
                        <canvas id="statistikChart"></canvas>
                    </div>

                </div>

            </div>

        </div>


        {{-- Doughnut Chart --}}
        <div class="col-md-4 mb-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-header bg-white">
                    <h5 class="mb-0 fw-bold">
                        Distribusi Data
                    </h5>
                </div>

                <div class="card-body d-flex align-items-center justify-content-center">

                    <div style="width: 100%; max-width: 350px;">
                        <canvas id="distribusiChart"></canvas>
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ========================= --}}
    {{-- DATA TERBARU --}}
    {{-- ========================= --}}

    <div class="row">

        {{-- Pasien Terbaru --}}
        <div class="col-md-6 mb-4">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        Pasien Terbaru
                    </h5>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($pasien as $item)

                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            {{ $item->nama }}
                                        </td>

                                        <td>
                                            {{ $item->alamat }}
                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="3"
                                            class="text-center text-muted">
                                            Belum ada data pasien
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    <a href="{{ route('pasien.index') }}"
                       class="btn btn-primary btn-sm">

                        Semua Pasien

                    </a>

                </div>

            </div>

        </div>


        {{-- Pendaftaran Terbaru --}}
        <div class="col-md-6 mb-4">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">
                    <h5 class="mb-0">
                        Pendaftaran Terbaru
                    </h5>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pasien</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($daftar as $item)

                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            {{ $item->pasien->nama ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $item->created_at?->format('d-m-Y') }}
                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="3"
                                            class="text-center text-muted">
                                            Belum ada pendaftaran
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    <a href="{{ route('daftar.index') }}"
                       class="btn btn-warning btn-sm">

                        Semua Pendaftaran

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- ========================= --}}
{{-- CHART JS --}}
{{-- ========================= --}}

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    // ==============================
    // DATA DARI LARAVEL
    // ==============================

    const jumlahPasien = {{ $jumlahPasien }};
    const jumlahPoli = {{ $jumlahPoli }};
    const jumlahDaftar = {{ $jumlahDaftar }};


    // ==============================
    // BAR CHART
    // ==============================

    const ctxStatistik = document
        .getElementById('statistikChart')
        .getContext('2d');

    new Chart(ctxStatistik, {

        type: 'bar',

        data: {

            labels: [
                'Pasien',
                'Poli',
                'Pendaftaran'
            ],

            datasets: [{

                label: 'Jumlah Data',

                data: [
                    jumlahPasien,
                    jumlahPoli,
                    jumlahDaftar
                ],

                backgroundColor: [
                    'rgba(13, 110, 253, 0.8)',
                    'rgba(25, 135, 84, 0.8)',
                    'rgba(255, 193, 7, 0.8)'
                ],

                borderColor: [
                    '#0d6efd',
                    '#198754',
                    '#ffc107'
                ],

                borderWidth: 1,

                borderRadius: 6

            }]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

                legend: {
                    display: false
                }

            },

            scales: {

                y: {

                    beginAtZero: true,

                    ticks: {
                        precision: 0
                    }

                }

            }

        }

    });


    // ==============================
    // DOUGHNUT CHART
    // ==============================

    const ctxDistribusi = document
        .getElementById('distribusiChart')
        .getContext('2d');

    new Chart(ctxDistribusi, {

        type: 'doughnut',

        data: {

            labels: [
                'Pasien',
                'Poli',
                'Pendaftaran'
            ],

            datasets: [{

                data: [
                    jumlahPasien,
                    jumlahPoli,
                    jumlahDaftar
                ],

                backgroundColor: [
                    '#0d6efd',
                    '#198754',
                    '#ffc107'
                ],

                borderWidth: 2,

                borderColor: '#ffffff'

            }]

        },

        options: {

            responsive: true,

            plugins: {

                legend: {
                    position: 'bottom'
                }

            }

        }

    });

</script>

@endsection
