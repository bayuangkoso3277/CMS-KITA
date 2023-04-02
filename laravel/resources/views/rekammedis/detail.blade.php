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
                                        <td>CPSN23032500001</td>
                                        <td>Indra</td>
                                        <td>Laki-Laki</td>
                                        <td>Gigi Kuning</td>
                                        <td>2011-01-25</td>
                                        <td>
                                          <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Detail</span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CPSN23032500001</td>
                                        <td>Indra</td>
                                        <td>Laki-Laki</td>
                                        <td>Gigi Kuning</td>
                                        <td>2011-02-03</td>
                                        <td>
                                          <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Detail</span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CPSN23032500001</td>
                                        <td>Indra</td>
                                        <td>Laki-Laki</td>
                                        <td>Gigi Kuning</td>
                                        <td>2011-02-14</td>
                                        <td>
                                          <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Detail</span></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <div class="card card-table show-entire">
                    <div class="card-body">
                      <div class="page-table-header mb-2">
                          <h3> Detail Pasien </h3>
                            <div class="card">
                              <div class="container-fliud">
                                <div class="wrapper row">
                                  <div class="preview col-md-6">
                                    <center>
                                    <div class="preview-pic tab-content">
                                      <div class="tab-pane active" id="pic-1"><img width="500" height="500" src="{{url('/assets')}}/img/fotoqu.jpeg" /></div>
                                    </div>
                                    </center>
                                  </div>
                                  <div class="details col-md-6">
                                    <h3 class="product-title">CPSN23032500001</h3>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">INDRA</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Tanggal Rekam Medis</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">21-01-2011</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">TD Sistole</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">150</label><label class="form-label">mmHg</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">TD Diastole</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">120</label><label class="form-label">mmHg</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Tinggi Badan</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">167</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Berat Badan</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">156</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Nadi</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">120</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Suhu Badan</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">35</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                            <label class="form-label">Respirasi</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="mb-3">
                                             <label class="form-label">18</label>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </br>
                            <div class="card mb-4">
                                    <div class="card-body">
                                      <h4>Anamnesis</h4>
                                      <div class="mb-3">
                                        <label class="form-label">Catatan :</label>
                                        <textarea readonly="readonly" class="form-control" placeholder="Diagnosis karies gigi dimulai dengan anamnesis berupa nyeri pada gigi, gigi berlubang, perubahan warna gigi, dan bau mulut. Pada pemeriksaan fisik ditemukan adanya plak dan lubang pada gigi. Tanda dan gejala yang dirasakan oleh pasien dapat membantu dokter gigi dalam menentukan tingkat kerusakan karies gigi." rows="3"></textarea>
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
                                            <input type="text" placeholder="Gigi Bawah" disabled="disabled" class="form-control" >
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label">Catatan :</label>
                                        <textarea class="form-control" readonly="readonly" placeholder="Nyeri saat mengunyah, Sensitif terhadap panas dan dingin" 
                                        rows="3"></textarea>
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
                                            <input type="text" placeholder="Normal/Sehat/Tidak Ada Keluhan" disabled="disabled" class="form-control" >
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mb-3">
                                        <label class="form-label">Catatan :</label>
                                        <textarea readonly="readonly" class="form-control" placeholder="Diagnosis karies gigi dimulai dengan anamnesis berupa nyeri pada gigi, gigi berlubang, perubahan warna gigi, dan bau mulut. Pada pemeriksaan fisik ditemukan adanya plak dan lubang pada gigi. Tanda dan gejala yang dirasakan oleh pasien dapat membantu dokter gigi dalam menentukan tingkat kerusakan karies gigi." rows="3"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card mb-4">
                                    <div class="card-body">
                                     <h4>Tata Laksana</h4>
                                      <div class="mb-3">
                                        <label class="form-label">Tindakan, Terapi, dan Saran :</label>
                                        <textarea readonly="readonly" placeholder="filling dengan membuang bagian gigi yang rusak. Setelah itu, gigi akan ditambal dengan menggunakan bahan-bahan khusus, seperti komposit resin, porselen, emas, atau perak" class="form-control" rows="3"></textarea>
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
<script>

</script>
@endSection


