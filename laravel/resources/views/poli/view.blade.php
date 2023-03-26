@extends('templates');
@section('content');
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Pasien </a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Poli Gigi</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
    <h5 >LIST ANTRIAN PASIEN</h5>
    <div class="hstack gap-3">
      <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">TAMBAH +</span></button>
    </div>
  </div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No Poli</th>
                <th>Nama</th>
                <th>Poli</th>
                <th>Status</th>
                <th>Umur</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A03</td>
                <td>Ashton Cox</td>
                <td>Gigi</td>
                <td> <span  class="btn btn-light btn-sm btn-icon-text" >Non Aktif</span> </td>
                <td>66</td>
                <td>2009-01-12</td>
                <td><button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">ACTION</span></button></td>
            </tr>
            <tr>
                <td>A02</td>
                <td>Airi Satou</td>
                <td>Gigi</td>
                <td> <span  class="btn btn-primary btn-sm btn-icon-text" >Aktif</span> </td>
                <td>33</td>
                <td>2008-11-28</td>
                <td><button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">ACTION</span></button></td>
            </tr>
            <tr>
                <td>A01</td>
                <td>Herrod Chandler</td>
                <td>Gigi</td>
                <td> <span  class="btn btn-primary btn-sm btn-icon-text" >Aktif</span> </td>
                <td>59</td>
                <td>2012-08-06</td>
                <td><button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">ACTION</span></button></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>No Poli</th>
                <th>Nama</th>
                <th>Poli</th>   
                <th>Status</th> 
                <th>Umur</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <SCRIPT> 
        $(document).ready(function () {
    $('#example').DataTable();
});
    </SCRIPT>    
@endSection
