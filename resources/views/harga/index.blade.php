@extends('adminlte::page')

@section('title', 'Daftar Harga')

@section('content_header')
<h1>
    <i class="fas fa-tags text-danger"></i>
    Daftar Harga WANTO Wash
</h1>
@stop

@section('content')

<div class="card">

    <div class="card-header bg-danger">

        <h3 class="card-title text-white">

            Paket Cuci Motor

        </h3>

        <div class="card-tools">

            <button class="btn btn-success btn-sm">

                <i class="fas fa-plus"></i>

                Tambah Paket

            </button>

        </div>

    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped">

            <thead class="table-dark">

                <tr>

                    <th width="60">No</th>

                    <th>Nama Paket</th>

                    <th width="180">Harga</th>

                    <th width="180">Aksi</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>1</td>

                    <td>Cuci Motor</td>

                    <td>Rp15.000</td>

                    <td>

                        <button class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                            Edit

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="fas fa-trash"></i>

                            Hapus

                        </button>

                    </td>

                </tr>

                <tr>

                    <td>2</td>

                    <td>Cuci + Semir Ban</td>

                    <td>Rp20.000</td>

                    <td>

                        <button class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                            Edit

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="fas fa-trash"></i>

                            Hapus

                        </button>

                    </td>

                </tr>

                <tr>

                    <td>3</td>

                    <td>Cuci Premium</td>

                    <td>Rp25.000</td>

                    <td>

                        <button class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                            Edit

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="fas fa-trash"></i>

                            Hapus

                        </button>

                    </td>

                </tr>

                <tr>

                    <td>4</td>

                    <td>Cuci Mesin</td>

                    <td>Rp30.000</td>

                    <td>

                        <button class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                            Edit

                        </button>

                        <button class="btn btn-danger btn-sm">

                            <i class="fas fa-trash"></i>

                            Hapus

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@stop
