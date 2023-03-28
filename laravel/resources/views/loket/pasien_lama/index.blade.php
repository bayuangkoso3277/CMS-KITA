@extends('templates');
@section('content');
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">PASIEN LAMA</a></li>
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
  <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
    <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a>BASIC INFORMATION</h2>
    <div class="hstack gap-3">
      <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
      <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Save</span></button>
    </div>
  </div>

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
                <input type="text" placeholder="01-2023-01-2322" disabled="disabled" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Address -->
      <div class="card mb-4">
        <div class="card-body">
          <h4>IDENTITAS PASIEN</h4>
          <div class="mb-3">
            <label class="form-label">NAMA PASIEN</label>
            <input type="text" placeholder="Antonie" class="form-control"  disabled="disabled">
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
          <h4>INSTITUSI BEROBAT</h4>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">PILIH POLI</label>
                <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                  <option data-select2-id="select2-data-3-ibs9">PILIH</option>
                  <option value="AF">POLI UMUM</option>
                  <option value="BS">POLI GIGI</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">PILIH DOKTER</label>
                <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                  <option data-select2-id="select2-data-3-ibs9">PILIH</option>
                  <option value="AF">BAYU</option>
                  <option value="BS">INDRA</option>
                  <option value="BS">BADRU</option>
                  <option value="BS">RIZQI</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
          </div>
        </div>
      </div>
    </div>
    <!-- Right side -->
    <div class="col-lg-4">
      <!-- Notes -->
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="h6">Notes</h3>
          <textarea class="form-control" rows="3"></textarea>
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
    </div>
@endSection
