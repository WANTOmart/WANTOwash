@extends('adminlte::page')

@section('title', 'Kasir')

@section('content_header')
<h1>
    <i class="fas fa-cash-register text-danger"></i>
    Kasir WANTO Wash
</h1>
@stop

@section('content')

<div class="card">

    <div class="card-header bg-danger">

        <h3 class="card-title text-white">

            Transaksi Baru

        </h3>

    </div>

    <form action="#" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="card-body">

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label>No Transaksi</label>

                        <input type="text"
                               class="form-control"
                               value="WW{{ date('YmdHis') }}"
                               readonly>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Tanggal</label>

                        <input type="text"
                               class="form-control"
                               value="{{ date('d-m-Y H:i') }}"
                               readonly>

                    </div>

                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-md-4">

                    <div class="form-group">

                        <label>Foto Motor</label>

                        <input type="file"
                               name="foto_motor"
                               class="form-control">

                    </div>

                </div>

                <div class="col-md-8">

                    <div class="form-group">

                        <label>Nama Pelanggan</label>

                        <input type="text"
                               name="nama"
                               class="form-control"
                               placeholder="Masukkan Nama">

                    </div>

                    <div class="form-group">

                        <label>No HP</label>

                        <input type="text"
                               name="no_hp"
                               class="form-control"
                               placeholder="08xxxxxxxxxx">

                    </div>

                    <div class="form-group">

                        <label>Plat Nomor</label>

                        <input type="text"
                               name="plat"
                               class="form-control"
                               placeholder="B 1234 ABC">

                    </div>

                    <div class="form-group">

                        <label>Merk Motor</label>

                        <input type="text"
                               name="merk"
                               class="form-control"
                               placeholder="Honda Beat">

                    </div>

                </div>

            </div>

            <hr>

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Paket Cuci</label>

                        <select class="form-control"
                                id="paket"
                                onchange="hitungHarga()">

                            <option value="15000">Cuci Motor - Rp15.000</option>
                            <option value="20000">Cuci + Semir Ban - Rp20.000</option>
                            <option value="25000">Cuci Premium - Rp25.000</option>
                            <option value="30000">Cuci Mesin - Rp30.000</option>

                        </select>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Harga</label>

                        <input type="number"
                               id="harga"
                               class="form-control"
                               value="15000"
                               readonly>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Bayar</label>

                        <input type="number"
                               id="bayar"
                               class="form-control"
                               onkeyup="hitungKembali()">

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Kembalian</label>

                        <input type="number"
                               id="kembali"
                               class="form-control"
                               readonly>

                    </div>

                </div>

            </div>

        </div>

        <div class="card-footer">

            <button class="btn btn-success">

                <i class="fas fa-save"></i>

                Simpan

            </button>

            <button type="reset"
                    class="btn btn-secondary">

                Reset

            </button>

            <button type="button"
                    class="btn btn-primary">

                <i class="fas fa-print"></i>

                Cetak Nota

            </button>

        </div>

    </form>

</div>

@stop

@section('js')

<script>

function hitungHarga(){

let harga=document.getElementById('paket').value;

document.getElementById('harga').value=harga;

hitungKembali();

}

function hitungKembali(){

let harga=parseInt(document.getElementById('harga').value)||0;

let bayar=parseInt(document.getElementById('bayar').value)||0;

document.getElementById('kembali').value=bayar-harga;

}

</script>

@stop
