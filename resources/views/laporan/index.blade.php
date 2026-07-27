@extends('adminlte::page')

@section('title', 'Laporan')

@section('content_header')
<h1>
    <i class="fas fa-chart-bar text-danger"></i>
    Laporan WANTO Wash
</h1>
@stop

@section('content')

<div class="row">

    <div class="col-md-3">

        <div class="small-box bg-success">

            <div class="inner">
                <h3>25</h3>
                <p>Total Transaksi</p>
            </div>

            <div class="icon">
                <i class="fas fa-receipt"></i>
            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="small-box bg-primary">

            <div class="inner">
                <h3>Rp375.000</h3>
                <p>Pendapatan Hari Ini</p>
            </div>

            <div class="icon">
                <i class="fas fa-money-bill-wave"></i>
            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="small-box bg-warning">

            <div class="inner">
                <h3>120</h3>
                <p>Total Motor</p>
            </div>

            <div class="icon">
                <i class="fas fa-motorcycle"></i>
            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="small-box bg-danger">

            <div class="inner">
                <h3>Rp9.500.000</h3>
                <p>Pendapatan Bulan Ini</p>
            </div>

            <div class="icon">
                <i class="fas fa-wallet"></i>
            </div>

        </div>

    </div>

</div>

<div class="card">

    <div class="card-header bg-danger">

        <h3 class="card-title text-white">

            Riwayat Transaksi

        </h3>

        <div class="card-tools">

            <button class="btn btn-success btn-sm">

                <i class="fas fa-file-excel"></i>

                Export Excel

            </button>

            <button class="btn btn-danger btn-sm">

                <i class="fas fa-file-pdf"></i>

                Export PDF

            </button>

        </div>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-dark">

            <tr>

                <th>No</th>

                <th>Tanggal</th>

                <th>Nama</th>

                <th>Plat Nomor</th>

                <th>Paket</th>

                <th>Total</th>

            </tr>

            </thead>

            <tbody>

            <tr>

                <td>1</td>

                <td>27-07-2026</td>

                <td>Budi</td>

                <td>B1234ABC</td>

                <td>Cuci Motor</td>

                <td>Rp15.000</td>

            </tr>

            <tr>

                <td>2</td>

                <td>27-07-2026</td>

                <td>Andi</td>

                <td>D5678XYZ</td>

                <td>Cuci Premium</td>

                <td>Rp25.000</td>

            </tr>

            <tr>

                <td>3</td>

                <td>27-07-2026</td>

                <td>Rudi</td>

                <td>F9988AA</td>

                <td>Cuci + Semir Ban</td>

                <td>Rp20.000</td>

            </tr>

            </tbody>

        </table>

    </div>

</div>

@stop
