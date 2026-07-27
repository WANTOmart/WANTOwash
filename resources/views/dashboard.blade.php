@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
        <i class="fas fa-motorcycle text-danger"></i>
        Dashboard WANTO Wash
    </h1>
@stop

@section('content')

<div class="row">

    <div class="col-lg-3 col-6">

        <div class="small-box bg-primary">

            <div class="inner">

                <h3>25</h3>

                <p>Motor Hari Ini</p>

            </div>

            <div class="icon">

                <i class="fas fa-motorcycle"></i>

            </div>

        </div>

    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">

            <div class="inner">

                <h3>Rp375.000</h3>

                <p>Pendapatan Hari Ini</p>

            </div>

            <div class="icon">

                <i class="fas fa-money-bill-wave"></i>

            </div>

        </div>

    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">

            <div class="inner">

                <h3>5</h3>

                <p>Sedang Dicuci</p>

            </div>

            <div class="icon">

                <i class="fas fa-soap"></i>

            </div>

        </div>

    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">

            <div class="inner">

                <h3>20</h3>

                <p>Selesai</p>

            </div>

            <div class="icon">

                <i class="fas fa-check-circle"></i>

            </div>

        </div>

    </div>

</div>


<div class="row">

<div class="col-md-8">

<div class="card">

<div class="card-header bg-danger">

<h3 class="card-title">

Pendapatan Hari Ini

</h3>

</div>

<div class="card-body">

<canvas id="myChart" height="100"></canvas>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card">

<div class="card-header bg-primary">

<h3 class="card-title">

Menu Cepat

</h3>

</div>

<div class="card-body text-center">

<a href="#" class="btn btn-danger btn-block mb-3">

<i class="fas fa-cash-register"></i>

Kasir

</a>

<a href="#" class="btn btn-primary btn-block mb-3">

<i class="fas fa-tags"></i>

Daftar Harga

</a>

<a href="#" class="btn btn-success btn-block mb-3">

<i class="fas fa-file-alt"></i>

Laporan

</a>

</div>

</div>

</div>

</div>

@stop


@section('js')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx=document.getElementById('myChart');

new Chart(ctx,{

type:'bar',

data:{

labels:['08','09','10','11','12','13','14','15'],

datasets:[{

label:'Pendapatan',

data:[45000,30000,60000,45000,50000,70000,35000,40000]

}]

}

});

</script>

@stop
