@extends('templates')
@section('content')
  <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">PASIEN BARU </a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
<div class="container-fluid">

<div class="container">
  <!-- Title -->
  

  <!-- Main content -->
  <div class="row">
    <!-- Left side -->
    <div class="col-lg-8">
      <!-- Basic information --> 
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">NO ANTRIAN</label>
                <input type="text" placeholder="A01" disabled="disabled" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">NO REKAM MEDIS</label>
                <input type="text" placeholder="CPSN23032500001" disabled="disabled" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4">
        <div class="card-body">
          <h4>IDENTITAS PASIEN</h4>
          <div class="mb-3">
            <label class="form-label">NAMA PASIEN</label>
            <input type="text" readonly="readonly" placeholder="INDRA" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">TANGGAL CEK</label>
            <input type="text" readonly="readonly" placeholder="23-01-2011" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">TD SISTOLE</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">TD DIASTOLE</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">TINGGI BADAN</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">BERAT BADAN</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">NADI</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">SUHU BADAN</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">RESPIRASI</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label class="form-label">NOTE</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <div class="row">
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- Right side -->
    <div class="col-lg-4">
      <!-- Status -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6">UPLOAD DOKUMEN</h3>
          <input class="form-control" type="file">
        </div>
      </div>
      <!-- Notes -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6">Notes</h3>
          <textarea class="form-control" rows="3"></textarea>
        </div>
      </div>
    </div>
      <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
          <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a></h2>
          <div class="hstack gap-3">
            <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
            <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Save</span></button> 
          </div>
      </div>
  </div>
</div>


  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection


