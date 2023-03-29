@extends('templates')
@section('content')
<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="departments.html">Loket </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Antrian List</li>
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
                                        <h3>Antrian List</h3>
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
                            <table class="table border-0 custom-table comman-table datatable">
                                <thead>
                                    <tr>
                                        <th>No Urut</th>
                                        <th>No Rekam Medis</th>
                                        <th>Nama </th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pasien</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A001</td>
                                        <td>PSN23032500001</td>
                                        <td>Indra</td>
                                        <td>Laki-Laki</td>
                                        <td>Lama</td>
                                        <td><button class="custom-badge status-green ">In Progress</button></td>
                                        <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-department.html"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Varifikasi Data</a>
                                                        </div>
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>A002</td>
                                        <td>PSN23032500002</td>
                                        <td>Badru</td>
                                        <td>Laki-Laki</td>
                                        <td>Baru</td>
                                        <td><button class="custom-badge status-pink ">Waiting</button></td>
                                        <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-department.html"><i
                                                                    class="fa-solid fa-search m-r-5"></i>
                                                            Cari riwayat</a>
                                                            <a class="dropdown-item" href="edit-department.html"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                            Tulis Rekam medis</a>
                                                        </div>
                                                    </div>
                                                </td>
                                    </tr>
                                    <tr>
                                        <td>A003</td>
                                        <td>PSN23032500023</td>
                                        <td>Bayu</td>
                                        <td>Laki-Laki</td>
                                        <td>Baru</td>
                                        <td><button class="custom-badge status-green ">In Progress</button></td>
                                        <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-department.html"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Varifikasi Data</a>
                                                        </div>
                                                    </div>
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
