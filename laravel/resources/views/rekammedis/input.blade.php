@extends('templates')
@section('content')
  <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Rekam Medis </a></li>
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
                                <h2 class="h3 mb-3 mb-lg-0"></a>Rekam Medis</h2>
                                <div class="hstack gap-3">
                                </div>
                              </div>

                              <!-- Main content -->
                              <div class="row">
                                <!-- Left side -->
                                <div class="col-lg-8">
                                  <!-- Basic information --> 
                                  <!-- Address -->
                                  <div class="card mb-4">
                                    <div class="card-body">
                                      <div class="mb-3">
                                         <label class="form-label">No Rekam Medis</label>
                                         <input type="text" disabled="disabled" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                         <label class="form-label">NAMA PASIEN</label>
                                         <input type="text" disabled="disabled" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                         <label class="form-label">TANGGAL CEK</label>
                                         <input type="date" disabled="disabled" class="form-control">
                                         </div>
                                      <div class="mb-3">
                                         <label class="form-label">TD SISTOLE</label>
                                         <input type="text"  disabled="disabled" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                         <label class="form-label">TD DIASTOLE</label>
                                         <input type="text" disabled="disabled" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                         <label class="form-label">TINGGI BADAN</label>
                                         <input type="text" disabled="disabled" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                         <label class="form-label">BERAT BADAN</label>
                                         <input type="text" disabled="disabled" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                         <label class="form-label">NADI</label>
                                         <input type="text" disabled="disabled" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                         <label class="form-label">SUHU BADAN</label>
                                         <input type="text" disabled="disabled" class="form-control" >
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label">RESPIRASI</label>
                                        <input type="text" disabled="disabled" class="form-control" >
                                      </div>      
                                    </div>
                                  </div>
                                  <div class="card mb-4">
                                    <div class="card-body">
                                      <h4>Anamnesis</h4>
                                      <div class="mb-3">
                                        <label class="form-label">Catatan :</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card mb-4">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <h4>Pemeriksaan Fisik</h4>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                              <option data-select2-id="select2-data-3-ibs9">PILIH</option>
                                              <option value="AF">GIGI ATAS</option>
                                              <option value="BS">GIGI BAWAH</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label">Catatan :</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card mb-4">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <h4>Diagnosis</h4>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                              <option data-select2-id="select2-data-3-ibs9">PILIH</option>
                                              <option value="AF"> Normal/Sehat/Tidak Ada Keluhan </option>
                                              <option value="BS">Terdapat Kelainan/Penyakit</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label">Catatan :</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card mb-4">
                                    <div class="card-body">
                                     <h4>Tata Laksana</h4>
                                      <div class="mb-3">
                                        <label class="form-label">Tindakan, Terapi, dan Saran :</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Right side -->
                                <div class="col-lg-4">
                                  <div class="card mb-4">
                                    <div class="card-body">
                                      <h3 class="h6">Notes</h3>
                                      <textarea  disabled="disabled" class="form-control" rows="3"></textarea>
                                    </div>
                                  </div>
                                  <div class="card mb-4">
                                    <div class="card-body">
                                      <h3 class="h6">Pemeriksaan Penunjang</h3>
                                      <textarea  disabled="disabled" class="form-control" rows="3"></textarea>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                     <h3 class="h6">*Unggah Hasil Pemeriksaan Penunjang (maks. 3 file)</h3>
                                     <input class="form-control" type="file">
                                  </div>
                                  <div class="card mb-4">
                                    <div class="card-body">
                                      <h3 class="h4">Konsultasi</h3>
                                      <label class="form-label">Konsultasi Selanjutnya :</label>
                                        <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-3-ibs9">PILIH</option>
                                            <option value="AF"> 1 MINGGU </option>
                                            <option value="BS">2 MINGGU</option>
                                        </select>
                                      <label class="form-label">Tanggal Konsultasi :</label>
                                        <input type="DATE" class="form-control" >
                                      <label class="form-label">Email :</label>
                                        <input type="text" class="form-control" >
                                      <label class="form-label">No Hp :</label>
                                        <input type="text" class="form-control" >
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


