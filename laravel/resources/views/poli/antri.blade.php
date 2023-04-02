@extends('templates')
@section('content')
<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="departments.html">Rekam Medis</a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Rekam Medis Search</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table show-entire">
                    <div class="card-body">

                        <div class="page-table-header mb-2">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="doctor-table-blk">
                                        <h3>Rekam Medis Search</h3>
                                        <div class="doctor-search-blk">
                                            <div class="top-nav-search table-search-blk">
                                                <form>
                                                    <input type="text" class="form-control"
                                                        placeholder="Search here">
                                                    <a class="btn"><img src="{{url('assets')}}/img/icons/search-normal.svg"
                                                            alt=""></a>
                                                </form>
                                            </div>
                                            <div class="add-group">
                                                <a href="javascript:;"
                                                    class="btn btn-primary doctor-refresh ms-2"><img
                                                        src="{{url('assets')}}/img/icons/re-fresh.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" style="padding:10px">
                            <table class="table border-0 custom-table comman-table datatableloket">
                                <thead>
                                    <tr>
                                        <th>No Antrian Poli</th>
                                        <th>No Rekam Medis</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Poli</th>
                                        <th>Tanggal Rekam Medis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>G03</td>
                                        <td>CPSN23032500001</td>
                                        <td>Indra</td>
                                        <td>Laki-Laki</td>
                                        <td>Gigi Kuning</td>
                                        <td>2011-01-25</td>
                                        <td><button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Action</span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>G02</td>
                                        <td>PSN23032500001</td>
                                        <td>Bayu</td>
                                        <td>Laki-Laki</td>
                                        <td>Gigi Kuning</td>
                                        <td>2011-01-25</td>
                                        <td><button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Action</span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>G01</td>
                                        <td>PSN23032500001</td>
                                        <td>Badru</td>
                                        <td>Laki-Laki</td>
                                        <td>Gigi Kuning</td>
                                        <td>2011-01-25</td>
                                        <td><button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Action</span></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var dataTableloket = $('.datatableloket').DataTable({
        
    });
</script>
@endSection


