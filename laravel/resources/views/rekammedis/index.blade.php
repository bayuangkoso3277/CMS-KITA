@extends('templates')
@section('content')
<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Pasien </a></li>
                    <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                    <li class="breadcrumb-item active">Rekam Medis List</li>
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
                                    <h3>Rekam Medis List</h3>
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
                        <table class="table border-0 custom-table comman-table datatable mb-0">
                            <thead>
                                <tr>
                                    <th>No Rekam Medis</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Hp</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PSN23032500001</td>
                                    <td class="profile-image">Indra</td>
                                    <td>Laki-Laki</td>
                                    <td>085955059595</td>
                                    <td class="text-end">
                                        <button class="btn btn-info" data-toggle="tooltip" title="Cari riwayat rekam medis"><i class="fa-solid fa-search"></i></button>
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
@endSection
