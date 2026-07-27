@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
<h1>
    <i class="fas fa-cogs text-danger"></i>
    Setting WANTO Wash
</h1>
@stop

@section('content')

<div class="row">

    <div class="col-md-8">

        <div class="card card-danger">

            <div class="card-header">

                <h3 class="card-title">

                    Pengaturan Usaha

                </h3>

            </div>

            <form action="#" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="card-body">

                    <div class="form-group">

                        <label>Logo Usaha</label>

                        <input type="file"
                               class="form-control"
                               name="logo">

                    </div>

                    <div class="form-group">

                        <label>Nama Usaha</label>

                        <input type="text"
                               class="form-control"
                               name="nama_usaha"
                               value="WANTO Wash">

                    </div>

                    <div class="form-group">

                        <label>Alamat</label>

                        <textarea
                            class="form-control"
                            rows="3"
                            name="alamat">Jl. ........................................</textarea>

                    </div>

                    <div class="form-group">

                        <label>No. HP / WhatsApp</label>

                        <input type="text"
                               class="form-control"
                               name="telepon"
                               value="08xxxxxxxxxx">

                    </div>

                    <div class="form-group">

                        <label>Email</label>

                        <input type="email"
                               class="form-control"
                               name="email">

                    </div>

                    <div class="form-group">

                        <label>Footer Nota</label>

                        <textarea
                            class="form-control"
                            rows="3"
                            name="footer">Terima kasih telah menggunakan jasa WANTO Wash.</textarea>

                    </div>

                </div>

                <div class="card-footer">

                    <button class="btn btn-success">

                        <i class="fas fa-save"></i>

                        Simpan Setting

                    </button>

                </div>

            </form>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card card-primary">

            <div class="card-header">

                <h3 class="card-title">

                    Informasi

                </h3>

            </div>

            <div class="card-body">

                <table class="table">

                    <tr>
                        <th>Versi</th>
                        <td>1.0</td>
                    </tr>

                    <tr>
                        <th>Developer</th>
                        <td>WANTO Wash</td>
                    </tr>

                    <tr>
                        <th>Framework</th>
                        <td>Laravel 12</td>
                    </tr>

                    <tr>
                        <th>Database</th>
                        <td>MySQL</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

</div>

@stop
